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
        self::assertEquals(4, $this->fixture->load($content)->countRecords());
    }

    /**
     * @test
     */
    public function canLoadFromFileAndCountRecords()
    {
        $sampleFileNameAndPath = __DIR__ . DIRECTORY_SEPARATOR . 'sample.idx';
        $this->fixture->loadFromFile($sampleFileNameAndPath);
        self::assertEquals(4, $this->fixture->countRecords());
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
     * @test
     * @dataProvider propertyValueProvider
     * @param string $propertyName
     * @param string $type
     */
    public function propertyValue($propertyName, $type)
    {
        $content = $this->getContent('sample.idx');
        $record = $this->fixture->load($content)->getFirst();

        $getter = 'get' . ucfirst($propertyName);
        $result = call_user_func(array($record, $getter));
        self::assertEquals($type, $result);
    }

    /**
     * Provider
     */
    public function propertyValueProvider()
    {
        return [
            ['version', 'IDX3.01',],
            ['senderId', 'OpenEstate.org',],
            ['objectCategory', 'HOUSE',],
            ['objectType', '5',],
            ['offerType', 'SALE',],
            ['refProperty', '41jkr',],
            ['refHouse', 'TLcWD',],
            ['refObject', '9VoHE',],
            ['objectStreet', 'example street 124',],
            ['objectZip', '12345',],
            ['objectCity', 'Berlin',],
            ['objectState', 'BE',],
            ['objectCountry', 'DE',],
            ['region', '',],
            ['objectSituation', 'some description about the location',],
            ['availableFrom', '25.02.2015',],
            ['objectTitle', 'title of object',],
            ['objectDescription', 'some description<br>about the object',],
            ['sellingPrice', '678',],
            ['rentNet', '804',],
            ['rentExtra', '206',],
            ['priceUnit', 'MONTHLY',],
            ['currency', 'EUR',],
            ['grossPremium', '4-5',],
            ['floor', '8',],
            ['numberOfRooms', '8.4',],
            ['numberOfApartments', '7.2',],
            ['surfaceLiving', '273',],
            ['surfaceProperty', '701',],
            ['surfaceUsable', '108',],
            ['volume', '54',],
            ['yearBuilt', '1904',],
            ['view', '1',],
            ['fireplace', '1',],
            ['cabletv', '1',],
            ['elevator', '1',],
            ['childFriendly', '',],
            ['parking', '',],
            ['garage', '1',],
            ['balcony', '1',],
            ['roofFloor', '',],
            ['distancePublicTransport', '1346',],
            ['distanceShop', '2041',],
            ['distanceKindergarten', '851',],
            ['distanceSchool1', '4651',],
            ['distanceSchool2', '1289',],
            ['movieFilename', 'document.mp4',],
            ['movieTitle', 'a document about the object',],
            ['movieDescription', '',],
            ['documentFilename', 'document.pdf',],
            ['documentTitle', 'a document about the object',],
            ['documentDescription', '',],
            ['url', 'http://test.org/object/123',],
            ['agencyId', '3C068',],
            ['agencyName', 'agency name',],
            ['agencyName2', 'additional agency name',],
            ['agencyReference', 'yCmld',],
            ['agencyStreet', 'example street 123',],
            ['agencyZip', '12345',],
            ['agencyCity', 'Berlin',],
            ['agencyCountry', 'DE',],
            ['agencyPhone', '030/123457',],
            ['agencyMobile', '',],
            ['agencyFax', '030/123456',],
            ['agencyEmail', 'tester@test.org',],
            ['agencyLogo', '',],
            ['visitName', 'Max Mustermann',],
            ['visitPhone', '030/123456',],
            ['visitEmail', '',],
            ['visitRemark', 'notes about the contact person',],
            ['publishUntil', '',],
            ['destination', '',],
            ['distanceMotorway', '4220',],
            ['ceilingHeight', '3.74',],
            ['hallHeight', '9.82',],
            ['maximalFloorLoading', '4783.1',],
            ['carryingCapacityCrane', '1232.4',],
            ['carryingCapacityElevator', '2960.2',],
            ['isdn', '',],
            ['wheelchairAccessible', '1',],
            ['animalAllowed', '',],
            ['ramp', '1',],
            ['liftingPlatform', '1',],
            ['railwayTerminal', '',],
            ['restrooms', '1',],
            ['waterSupply', '',],
            ['sewageSupply', '',],
            ['powerSupply', '',],
            ['gasSupply', '',],
            ['municipalInfo', '',],
            ['ownObjectUrl', 'http://test.org/object/123',],
            ['billingSalutation', '2',],
            ['billingFirstName', 'Max',],
            ['billingName', 'Mustermann',],
            ['billingCompany', 'agency name',],
            ['billingStreet', 'example street 123',],
            ['billingPostBox', 'additional address notes',],
            ['billingZip', '12345',],
            ['billingPlaceName', 'Berlin',],
            ['billingLand', 'Germany',],
            ['billingPhone1', '030/123457',],
            ['billingPhone2', '030/123458',],
            ['billingMobile', '030/132456',],
            ['billingLanguage', '1',],
            ['publishingId', '',],
            ['deliveryId', '',],
            ['commissionSharing', '',],
            ['commissionOwn', '',],
            ['commissionPartner', '',],
            ['agencyLogo2', '',],
            ['numberOfFloors', '9',],
            ['yearRenovated', '1998',],
            ['flatSharingCommunity', '1',],
            ['cornerHouse', '1',],
            ['middleHouse', '',],
            ['buildingLandConnected', '1',],
            ['gardenhouse', '',],
            ['raisedGroundFloor', '',],
            ['newBuilding', '1',],
            ['oldBuilding', '',],
            ['underBuildingLaws', '',],
            ['underRoof', '',],
            ['swimmingpool', '1',],
            ['minergieGeneral', '',],
            ['minergieCertified', '1',],
            ['lastModified', '25.02.2015 01:58:05',],
            ['advertisementId', 'hxsaI',],
//            ['sparefield1', 'spare field 1',],
//            ['sparefield2', 'spare field 2',],
//            ['sparefield3', 'spare field 3',],
//            ['sparefield4', '',],
        ];
    }

    /**
     * @param string $fileName
     * @return string
     */
    private function getContent($fileName)
    {
        $sampleFileNameAndPath = __DIR__ . DIRECTORY_SEPARATOR . $fileName;
        return file_get_contents($sampleFileNameAndPath);
    }

}
