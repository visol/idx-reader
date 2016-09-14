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
 * Class RecordValidator
 */
class RecordValidator
{

    /**
     * @var array
     */
    protected $mandatoryFields = [];

    /**
     * @param Record $record
     * @return void
     * @throws \RuntimeException
     */
    public function validate(Record $record)
    {
        foreach ($this->getMandatoryFields() as $mandatoryField) {
            $property = FieldConverter::forField($mandatoryField)->toProperty();
            $method = 'get' . $property;
            $value = call_user_func([$record, $method]);

            if (is_string($value) && $value === '') {
                $message = sprintf(
                    'Missing value for field %s with identifier %s',
                    $mandatoryField,
                    $record->getVersion()
                );
                throw new \RuntimeException($message, 1473872262);
            }
        }
    }
    /**
     * @return array
     */
    public function getMandatoryFields()
    {
        if (!$this->mandatoryFields) {
            $this->mandatoryFields = [
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
        return $this->mandatoryFields;
    }

    /**
     * @param array $mandatoryFields
     * @return $this
     */
    public function setMandatoryFields($mandatoryFields)
    {
        $this->mandatoryFields = $mandatoryFields;
        return $this;
    }

}
