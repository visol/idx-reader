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
 * Class FieldConverter
 */
class FieldConverter
{

    /**
     * @var string
     */
    protected $fieldName = '';

    /**
     * @param string $fileName
     * @return $this
     */
    static public function forField($fileName)
    {
        return new FieldConverter($fileName);
    }

    /**
     * FieldConverter constructor.
     */
    public function __construct($fieldName)
    {
        $this->fieldName = $fieldName;
    }

//    /**
//     * @return string
//     */
//    public function computeGetter()
//    {
//
//    }

    /**
     * @return string
     */
    public function toProperty()
    {
        $t1 = str_replace('_', ' ', $this->fieldName);
        $t2 = ucwords($t1);
        return str_replace(' ', '', $t2);
    }

}
