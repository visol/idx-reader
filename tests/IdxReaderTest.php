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
use Visol\IdxReader\IdxReader;

/**
 * Class IdxReaderTest
 */
class IdxReaderTest extends TestCase
{
    /**
     * @var IdxReader
     */
    protected $fixture;

    /**
     * This method is called before a test is executed.
     */
    protected function setUp()
    {
        $this->fixture = new IdxReader();
    }

    /**
     * This method is called after a test is executed.
     */
    protected function tearDown()
    {
    }

    /**
     * @test
     */
    public function canBeInstantiated()
    {
        self::assertInstanceOf(IdxReader::class, $this->fixture);
    }

    /**
     * @test
     */
    public function canLoadContentAndCountRecords()
    {
        $content = $this->getContent('sample.idx');
        self::assertEquals(1, $this->fixture->load($content)->countRecords());
    }

    /**
     * @test
     */
    public function canLoadContentWithMappingAndCountItems()
    {
        $content = $this->getContent('sampleWithMappingRequired.idx');
        $this->fixture
            ->setMappings([
                'prop_view' => 'view',
                'prop_fireplace' => 'fireplace',
                'prop_cabletv' => 'cabletv',
                'prop_elevator' => 'elevator',
                'prop_child-friendly' => 'child_friendly',
                'prop_parking' => 'parking',
                'prop_garage' => 'garage',
                'prop_balcony' => 'balcony',
                'prop_roof_floor' => 'roof_floor',
                'pic_3_filename' => 'picture_3_filename',
                'billing_anrede' => 'billing_salutation',
                'flat-sharing_community' => 'flat_sharing_community',
                'building_landt_connected' => 'building_land_connected',
                'sparfield_1' => 'sparefield_1',
                'sparfield_2' => 'sparefield_2',
                'sparfield_3' => 'sparefield_3',
                'sparfield_4' => 'sparefield_4',
            ])
            ->load($content);
        self::assertEquals(1, $this->fixture->countRecords());
    }

    /**
     * @test
     */
    public function canLoadFromFileAndCountRecords()
    {
        $sampleFileNameAndPath = __DIR__ . DIRECTORY_SEPARATOR . 'sample.idx';
        $this->fixture->loadFromFile($sampleFileNameAndPath);
        self::assertEquals(1, $this->fixture->countRecords());
    }

    /**
     * @test
     * @expectedException \RuntimeException
     */
    public function loadNotExistingFileGenerateRuntimeException()
    {
        $this->fixture->loadFromFile('/foo/bar/baz.idx');
    }

    /**
     * @test
     */
    public function canSetMappings()
    {
        $this->fixture->setMappings([]);
        self::assertAttributeInternalType('array', 'mappings', $this->fixture);
    }

    /**
     * @test
     */
    public function canSetMandatoryFields()
    {
        $this->fixture->setMandatoryFields([]);
        self::assertAttributeInternalType('array', 'mandatoryFields', $this->fixture);
    }

    /**
     * @test
     * @dataProvider propertyProvider
     * @param string $propertyName
     * @param string $type
     */
    public function propertyType($propertyName, $type)
    {
        $getter = 'get' . ucfirst($propertyName);
        $result = call_user_func(array($this->fixture, $getter));
        self::assertInternalType($type, $result);
    }

    /**
     * Provider
     */
    public function propertyProvider()
    {
        return [
            ['records', 'array',],
        ];
    }

    /**
     * @param string $fileName
     * @return string
     */
    private function getContent($fileName) {
        $sampleFileNameAndPath = __DIR__ . DIRECTORY_SEPARATOR . $fileName;
        return file_get_contents($sampleFileNameAndPath);
    }

}
