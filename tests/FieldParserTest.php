<?php

/*
 * This file is part of the visol/idx-reader package.
 *
 * (c) Fabien Udriot <fabien.udriot@visol.ch>
 *
 * For the full copyright and license information, please view the LICENSE
 * file that was distributed with this source code.
 */

namespace Visol\IdxReader\Tests;

use PHPUnit\Framework\TestCase;
use Visol\IdxReader\FieldParser;

/**
 * Class FieldParserTest
 */
class FieldParserTest extends TestCase
{

    /**
     * @test
     */
    public function canBeInstantiated()
    {
        self::assertInstanceOf(FieldParser::class, $this->getInstanceOfFieldParser());
    }

    /**
     * @test
     */
    public function canParseFieldsAndReturnAssociativeArray()
    {

        $fieldParser = $this->getInstanceOfFieldParser();

        $fields = $fieldParser->getFields();
        self::assertCount(182, $fields);
    }

    /**
     * @param array $mapping
     * @return FieldParser
     */
    private function getInstanceOfFieldParser(array $mapping = []) {
        return new FieldParser();
    }

}
