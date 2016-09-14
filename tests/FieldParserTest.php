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
        self::assertArrayHasKey('version', $fields);
        self::assertArrayHasKey('sender_id', $fields);
    }

    /**
     * @test
     */
    public function parseWithMappingsConvertField()
    {

        $fieldParser = $this->getInstanceOfFieldParser(['prop_view' => 'view']);

        $fields = $fieldParser->getFields();
        self::assertEquals('view', $fields['prop_view']);
    }

    /**
     * @return string
     */
    private function getFirstRow() {
        $sampleFileNameAndPath = __DIR__ . DIRECTORY_SEPARATOR . 'sampleWithMappingRequired.idx';
        $content = file_get_contents($sampleFileNameAndPath);

        $rows = explode("\n", $content);
        return array_shift($rows);
    }

    /**
     * @param array $mapping
     * @return FieldParser
     */
    private function getInstanceOfFieldParser(array $mapping = []) {
        $firstRow = $this->getFirstRow();
        return new FieldParser($firstRow, $mapping);
    }

}
