<?php

/*
 * This file is part of the visol/assert package.
 *
 * (c) Fabien Udriot <fabien.udriot@visol.ch>
 *
 * For the full copyright and license information, please view the LICENSE
 * file that was distributed with this source code.
 */

namespace Visol\IdxReader\Tests;

use PHPUnit\Framework\TestCase;
use Visol\IdxReader\Record;


/**
 * @since  1.0
 */
class RecordTest extends TestCase
{
    /**
     * @var Record
     */
    protected $fixture;

    /**
     * This method is called before a test is executed.
     */
    protected function setUp()
    {
        $this->fixture = new Record();
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
        self::assertInstanceOf(Record::class, $this->fixture);
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
            ['version', 'string',],
            ['senderId', 'string',],
            ['objectCategory', 'string',],
            ['objectType', 'integer',],
            ['offerType', 'string',],
            ['refProperty', 'string',],
            ['refHouse', 'string',],
            ['refObject', 'string',],
            ['objectStreet', 'string',],
            ['objectZip', 'string',],
            ['objectCity', 'string',],
            ['objectState', 'string',],
            ['objectCountry', 'string',],
            ['region', 'string',],
            ['objectSituation', 'string',],
            #['availableFrom', '\DateTime',],
            ['objectTitle', 'string',],
            ['objectDescription', 'string',],
            ['sellingPrice', 'integer',],
            ['rentNet', 'integer',],
            ['rentExtra', 'integer',],
            ['priceUnit', 'string',],
            ['currency', 'string',],
            ['grossPremium', 'string',],
            ['floor', 'integer',],
            ['numberOfRooms', 'integer',],
            ['numberOfApartments', 'integer',],
            ['surfaceLiving', 'integer',],
            ['surfaceProperty', 'integer',],
            ['surfaceUsable', 'integer',],
            ['volume', 'integer',],
            ['yearBuilt', 'integer',],
            ['view', 'boolean',],
            ['fireplace', 'boolean',],
            ['cabletv', 'boolean',],
            ['elevator', 'boolean',],
            ['childFriendly', 'boolean',],
            ['parking', 'boolean',],
            ['garage', 'boolean',],
            ['balcony', 'boolean',],
            ['roofFloor', 'boolean',],
            ['distancePublicTransport', 'integer',],
            ['distanceShop', 'integer',],
            ['distanceKindergarten', 'integer',],
            ['distanceSchool1', 'integer',],
            ['distanceSchool2', 'integer',],
            ['pictures', 'array',],
            ['movieFilename', 'string',],
            ['movieTitle', 'string',],
            ['movieDescription', 'string',],
            ['documentFilename', 'string',],
            ['documentTitle', 'string',],
            ['documentDescription', 'string',],
            ['url', 'string',],
            ['agencyId', 'string',],
            ['agencyName', 'string',],
            ['agencyName2', 'string',],
            ['agencyReference', 'string',],
            ['agencyStreet', 'string',],
            ['agencyZip', 'string',],
            ['agencyCity', 'string',],
            ['agencyCountry', 'string',],
            ['agencyPhone', 'string',],
            ['agencyMobile', 'string',],
            ['agencyFax', 'string',],
            ['agencyEmail', 'string',],
            ['agencyLogo', 'string',],
            ['visitName', 'string',],
            ['visitPhone', 'string',],
            ['visitEmail', 'string',],
            ['visitRemark', 'string',],
            #['publishUntil', '\DateTime',],
            ['destination', 'string',],
            ['distanceMotorway', 'integer',],
            ['ceilingHeight', 'integer',],
            ['hallHeight', 'integer',],
            ['maximalFloorLoading', 'integer',],
            ['carryingCapacityCrane', 'integer',],
            ['carryingCapacityElevator', 'integer',],
            ['isdn', 'boolean',],
            ['wheelchairAccessible', 'boolean',],
            ['animalAllowed', 'boolean',],
            ['ramp', 'boolean',],
            ['liftingPlatform', 'boolean',],
            ['railwayTerminal', 'boolean',],
            ['restrooms', 'boolean',],
            ['waterSupply', 'boolean',],
            ['sewageSupply', 'boolean',],
            ['powerSupply', 'boolean',],
            ['gasSupply', 'boolean',],
            ['municipalInfo', 'string',],
            ['ownObjectUrl', 'string',],
            ['billingSalutation', 'integer',],
            ['billingFirstName', 'string',],
            ['billingName', 'string',],
            ['billingCompany', 'string',],
            ['billingStreet', 'string',],
            ['billingPostBox', 'string',],
            ['billingZip', 'string',],
            ['billingPlaceName', 'string',],
            ['billingLand', 'string',],
            ['billingPhone1', 'string',],
            ['billingPhone2', 'string',],
            ['billingMobile', 'string',],
            ['billingLanguage', 'integer',],
            ['publishingId', 'integer',],
            ['deliveryId', 'integer',],
            ['commissionSharing', 'string',],
            ['commissionOwn', 'string',],
            ['commissionPartner', 'string',],
            ['agencyLogo2', 'string',],
            ['numberOfFloors', 'string',],
            ['yearRenovated', 'string',],
            ['flatSharingCommunity', 'boolean',],
            ['cornerHouse', 'boolean',],
            ['middleHouse', 'boolean',],
            ['buildingLandConnected', 'boolean',],
            ['gardenhouse', 'boolean',],
            ['raisedGroundFloor', 'boolean',],
            ['newBuilding', 'boolean',],
            ['oldBuilding', 'boolean',],
            ['underBuildingLaws', 'boolean',],
            ['underRoof', 'boolean',],
            ['swimmingpool', 'boolean',],
            ['minergieGeneral', 'boolean',],
            ['minergieCertified', 'boolean',],
            #['lastModified', ' \DateTime',],
            ['advertisementId', 'string',],
            ['sparefield1', 'string',],
            ['sparefield2', 'string',],
            ['sparefield3', 'string',],
            ['sparefield4', 'string',],
        ];
    }

}
