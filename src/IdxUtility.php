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
     * @throws \RuntimeException
     */
    static public function toValues($row)
    {

        $row = (string)$row;
        if (!$row) {
            throw new \RuntimeException('Mmm... empty row to convert to values... It should never be the case.', 1473870139);
        }
        $values = explode('#', trim($row));
        array_pop($values); # we remove the last items which is an empty value
        return $values;
    }

}
