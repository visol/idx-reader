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
     * @var bool
     */
    protected $forceUtf8 = false;

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

        if (count($rows) > 0) {
            $fieldParser = new FieldParser();

            foreach ($rows as $index => $row) {

                $values = IdxUtility::toValues($row);

                if (!empty($values)) {
                    // We stripped the spare fields here
                    $values = array_slice($values, 0, 179);
                    if ($fieldParser->getNumberOfFields() !== count($values)) {
                        $message = sprintf(
                            'Invalid entry! Number of fields (%s) does not corresponds %s for entry #%s',
                            count($values),
                            $fieldParser->getNumberOfFields(),
                            $index
                        );
                        throw new \RuntimeException($message, 1473864502);
                    }

                    $record = $this->createRecord($fieldParser->getFields(), $values);
                    $this->records[] = $record;
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
        $pictures = [];
        $index = 0;
        foreach ($fields as $field) {

            if (strpos($field, 'picture') === false) {
                $property = FieldConverter::forField($field)->toProperty();
                $method = 'set' . $property;
                $value = $values[$index];

                if ($this->forceUtf8) {
                    $value = utf8_encode($value);
                }

                call_user_func_array([$record, $method], [$value]);
            } else {
                // Case for pictures
                if (preg_match('/([0-9]+)+_([\w]+)/', $field, $matches)) {
                    $position = $matches[1];
                    $fieldName = $matches[2];
                    $pictures[$position][$fieldName] = $values[$index];
                } else {
                    throw new \RuntimeException('I could not parse the picture field ' . $field, 1473885239);
                }

            }

            $index++;
        }

        // Instantiate array of pictures.
        $record->setPictures($this->createPictures($pictures));

        return $record;
    }

    /**
     * @param array $pictures
     * @return Picture[]
     * @throws \RuntimeException
     */
    protected function createPictures(array $pictures)
    {
        $objects = [];
        foreach ($pictures as $picture) {
            if (!empty($picture['filename'])) {

                $object = new Picture();
                $object->setTitle($picture['title'])
                    ->setDescription($picture['description'])
                    ->setFilename($picture['filename'])
                    ->setUrl($picture['url']);
                $objects[] = $object;
            }
        }
        return $objects;
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
     * @return Record
     */
    public function getFirst()
    {
        return $this->records[0];
    }

    /**
     * @param int $index
     * @return Record|null
     */
    public function get($index)
    {
        $record = null;
        if (!empty($this->records[$index])) {
            $record = $this->records[$index];
        }
        return $record;
    }

    /**
     * @return int
     */
    public function countRecords()
    {
        return count($this->getRecords());
    }

    /**
     * @return $this
     */
    public function forceUtf8()
    {
        $this->forceUtf8 = true;
        return $this;
    }

}
