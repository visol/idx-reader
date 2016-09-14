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
 * Class FieldParser
 */
class FieldParser
{

    /**
     * @var array
     */
    protected $fields = [];

    /**
     * @var array
     */
    protected $mappings = [];

    /**
     * @var string
     */
    protected $firstRow = '';

    /**
     * @param string $firstRow
     * @param array $mappings
     * @throws \RuntimeException
     */
    public function __construct($firstRow, array $mappings = [])
    {
        $firstRow = (string)$firstRow;
        if (!$firstRow){
            throw new \RuntimeException('I can not process, first row appears to be empty!', 1473864991);
        }
        $this->firstRow = $firstRow;
        $this->mappings = $mappings;
    }

    /**
     * @return array
     */
    public function getFields()
    {
        if (!$this->fields) {
            $this->initializeFields();
        }

        return $this->fields;
    }

    /**
     * @return int
     */
    public function getNumberOfFields()
    {
        if (!$this->fields) {
            $this->initializeFields();
        }
        return count($this->fields);
    }


    /**
     * @return array
     */
    protected function initializeFields()
    {
        // parse values from first row to compute the fields.
        $rawFields = IdxUtility::toValues($this->firstRow);
        foreach ($rawFields as $fieldName) {
            $this->fields[$fieldName] = $this->resolveFieldName($fieldName);
        }

        return $this->fields;
    }

    /**
     * @return array
     */
    protected function resolveFieldName($fieldName)
    {
        $resolvedFieldName = $fieldName;
        if (array_key_exists($fieldName, $this->mappings)) {
            $resolvedFieldName = $this->mappings[$fieldName];
        }
        return $resolvedFieldName;
    }

}
