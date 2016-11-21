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
 * Class IdxUtility
 */
class IdxUtility
{

    /**
     * Transform a # separated string to an array
     *
     * @param string $row
     * @return array
     */
    static public function toValues($row)
    {
        $values = []; // default is empty.
        $row = (string)$row;
        if ($row) {
            $values = explode('#', trim($row));
            array_pop($values); # we remove the last items which is an empty value
        }
        return $values;
    }

}
