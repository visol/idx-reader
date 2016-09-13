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
    protected $dataSource = [];

    /**
     * @param $identifier
     * @return $this
     */
    public function findByIdentifier($identifier)
    {
        return $this;
    }

    /**
     * @param $data
     * @return $this
     */
    public function load($data)
    {
        return $this;
    }


}
