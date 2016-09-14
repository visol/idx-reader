<?php

/*
 * This file is part of the visol/idx-reader package.
 *
 * (c) Fabien Udriot <fabien.udriot@visol.ch>
 *
 * For the full copyright and license information, please view the LICENSE
 * file that was distributed with this source code.
 */

namespace Visol\IdxReader;

/**
 * Class IdxReader
 */
class IdxReader
{

    /**
     * @var array
     */
    protected $records = [];

    /**
     * @var array
     */
    protected $fields = [];

    /**
     * @var array
     */
    protected $mappings = [];

    /**
     * @param $identifier
     * @return $this
     */
    public function findByIdentifier($identifier)
    {
        return $this;
    }

    /**
     * @param $content
     * @return $this
     * @throws \RuntimeException
     */
    public function load($content)
    {
        $rows = explode("\n", $content);

        if (count($rows) > 1) {
            $firstRow = array_shift($rows);
            $fieldParser = new FieldParser($firstRow, $this->mappings);

            foreach ($rows as $row) {

                $trimmedRow = trim($row); // just for security, trim the row.
                if ($trimmedRow) {

                    $values = IdxUtility::toValues($trimmedRow);

                    // Security check.
                    if ($fieldParser->getNumberOfFields() !== count($values)) {
                        throw new \RuntimeException('Invalid entry! Number of fields does not correpond for identifier ' . $values[0], 1473864502);
                    }

                    $record = $this->createRecord($fieldParser->getFields(), $values);
                    $this->records[$record->getVersion()] = $record;
                }

            }
        }

        return $this;
    }

    /**
     * @param array $fields
     * @param array $values
     * @return Record
     * @throws \RuntimeException
     */
    protected function createRecord(array $fields, array $values)
    {
        $record = new Record();
        $index = 0;
        foreach ($fields as $givenField => $canonicalField) {

            if (strpos($canonicalField, 'picture') === false) {
                $property = FieldConverter::forField($canonicalField)->toProperty();
                $method = 'set' . $property;
                $value = $values[$index];

                if (method_exists($record, $method)) {
                    call_user_func_array([$record, $method], [$value]);
                } else {
                    $message = sprintf(
                        'I can not set field name "%s". Try adding mapping [yourField => idxField]',
                        $givenField
                    );
                    throw new \RuntimeException($message, 1473867756);
                }
            } else {
                // handle picture case
            }

            $index++;
        }
        return $record;
    }

    /**
     * @param string $fileNameAndPath
     * @return $this
     * @throws \RuntimeException
     */
    public function loadFromFile($fileNameAndPath)
    {

        if (is_file($fileNameAndPath)) {
            $content = file_get_contents($fileNameAndPath);
            $this->load($content);
        } else {
            throw new \RuntimeException('I could not find file ' . $fileNameAndPath, 1473848220);
        }
        return $this;
    }

    /**
     * @return array
     */
    public function getRecords()
    {
        return $this->records;
    }

    /**
     * @return int
     */
    public function countRecords()
    {
        return count($this->getRecords());
    }

    /**
     * @param array $mappings
     * @return $this
     */
    public function setMappings($mappings)
    {
        $this->mappings = $mappings;
        return $this;
    }

    /**
     * @return array
     */
    public function getMandatoryFields()
    {
        return [
            'version',
            'sender_id',
            'object_category',
            'object_type',
            'offer_type',
            'ref_property',
            'ref_house',
            'ref_object',
            'object_street',
            'object_zip',
            'object_city',
            'object_country',
            'object_title',
            'object_description',
            'selling_price',
            'rent_net',
            'rent_extra',
            'price_unit',
            'currency',
            'agency_id',
        ];
    }

}
