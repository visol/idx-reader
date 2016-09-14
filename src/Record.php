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
 * Class Record
 */
class Record
{

    /**
     * @var string
     */
    protected $version = '';

    /**
     * @var string
     */
    protected $senderId = '';

    /**
     * @var string
     */
    protected $objectCategory = '';

    /**
     * @var int
     */
    protected $objectType = 0;

    /**
     * @var string
     */
    protected $offerType = '';

    /**
     * @var string
     */
    protected $refProperty = '';

    /**
     * @var string
     */
    protected $refHouse = '';

    /**
     * @var string
     */
    protected $refObject = '';

    /**
     * @var string
     */
    protected $objectStreet = '';

    /**
     * @var string
     */
    protected $objectZip = '';

    /**
     * @var string
     */
    protected $objectCity = '';

    /**
     * @var string
     */
    protected $objectState = '';

    /**
     * @var string
     */
    protected $objectCountry = '';

    /**
     * @var string
     */
    protected $region = '';

    /**
     * @var string
     */
    protected $objectSituation = '';

    /**
     * @var \DateTime
     */
    protected $availableFrom;

    /**
     * @var string
     */
    protected $objectTitle = '';

    /**
     * @var string
     */
    protected $objectDescription = '';

    /**
     * @var int
     */
    protected $sellingPrice = 0;

    /**
     * @var int
     */
    protected $rentNet = 0;

    /**
     * @var int
     */
    protected $rentExtra = 0;

    /**
     * @var string
     */
    protected $priceUnit = '';

    /**
     * @var string
     */
    protected $currency = '';

    /**
     * @var string
     */
    protected $grossPremium = '';

    /**
     * @var int
     */
    protected $floor = 0;

    /**
     * @var int
     */
    protected $numberOfRooms = 0;

    /**
     * @var int
     */
    protected $numberOfApartments = 0;

    /**
     * @var int
     */
    protected $surfaceLiving = 0;

    /**
     * @var int
     */
    protected $surfaceProperty = 0;

    /**
     * @var int
     */
    protected $surfaceUsable = 0;

    /**
     * @var int
     */
    protected $volume = 0;

    /**
     * @var int
     */
    protected $yearBuilt = 0;

    /**
     * @var bool
     */
    protected $view = false;

    /**
     * @var bool
     */
    protected $fireplace = false;

    /**
     * @var bool
     */
    protected $cabletv = false;

    /**
     * @var bool
     */
    protected $elevator = false;

    /**
     * @var bool
     */
    protected $childFriendly = false;

    /**
     * @var bool
     */
    protected $parking = false;

    /**
     * @var bool
     */
    protected $garage = false;

    /**
     * @var bool
     */
    protected $balcony = false;

    /**
     * @var bool
     */
    protected $roofFloor = false;

    /**
     * @var int
     */
    protected $distancePublicTransport = 0;

    /**
     * @var int
     */
    protected $distanceShop = 0;

    /**
     * @var int
     */
    protected $distanceKindergarten = 0;

    /**
     * @var int
     */
    protected $distanceSchool1 = 0;

    /**
     * @var int
     */
    protected $distanceSchool2 = 0;

    /**
     * @var Picture[]
     */
    protected $pictures = [];

    /**
     * @var string
     */
    protected $movieFilename = '';

    /**
     * @var string
     */
    protected $movieTitle = '';

    /**
     * @var string
     */
    protected $movieDescription = '';

    /**
     * @var string
     */
    protected $documentFilename = '';

    /**
     * @var string
     */
    protected $documentTitle = '';

    /**
     * @var string
     */
    protected $documentDescription = '';

    /**
     * @var string
     */
    protected $url = '';

    /**
     * @var string
     */
    protected $agencyId = '';

    /**
     * @var string
     */
    protected $agencyName = '';

    /**
     * @var string
     */
    protected $agencyName2 = '';

    /**
     * @var string
     */
    protected $agencyReference = '';

    /**
     * @var string
     */
    protected $agencyStreet = '';

    /**
     * @var string
     */
    protected $agencyZip = '';

    /**
     * @var string
     */
    protected $agencyCity = '';

    /**
     * @var string
     */
    protected $agencyCountry = '';

    /**
     * @var string
     */
    protected $agencyPhone = '';

    /**
     * @var string
     */
    protected $agencyMobile = '';

    /**
     * @var string
     */
    protected $agencyFax = '';

    /**
     * @var string
     */
    protected $agencyEmail = '';

    /**
     * @var string
     */
    protected $agencyLogo = '';

    /**
     * @var string
     */
    protected $visitName = '';

    /**
     * @var string
     */
    protected $visitPhone = '';

    /**
     * @var string
     */
    protected $visitEmail = '';

    /**
     * @var string
     */
    protected $visitRemark = '';

    /**
     * @var \DateTime
     */
    protected $publishUntil;

    /**
     * @var string
     */
    protected $destination = '';

    /**
     * @var int
     */
    protected $distanceMotorway = 0;

    /**
     * @var int
     */
    protected $ceilingHeight = 0;

    /**
     * @var int
     */
    protected $hallHeight = 0;

    /**
     * @var int
     */
    protected $maximalFloorLoading = 0;

    /**
     * @var int
     */
    protected $carryingCapacityCrane = 0;

    /**
     * @var int
     */
    protected $carryingCapacityElevator = 0;

    /**
     * @var bool
     */
    protected $isdn = false;

    /**
     * @var bool
     */
    protected $wheelchairAccessible = false;

    /**
     * @var bool
     */
    protected $animalAllowed = false;

    /**
     * @var bool
     */
    protected $ramp = false;

    /**
     * @var bool
     */
    protected $liftingPlatform = false;

    /**
     * @var bool
     */
    protected $railwayTerminal = false;

    /**
     * @var bool
     */
    protected $restrooms = false;

    /**
     * @var bool
     */
    protected $waterSupply = false;

    /**
     * @var bool
     */
    protected $sewageSupply = false;

    /**
     * @var bool
     */
    protected $powerSupply = false;

    /**
     * @var bool
     */
    protected $gasSupply = false;

    /**
     * @var string
     */
    protected $municipalInfo = '';

    /**
     * @var string
     */
    protected $ownObjectUrl = '';

    /**
     * @var int
     */
    protected $billingSalutation = 0;

    /**
     * @var string
     */
    protected $billingFirstName = '';

    /**
     * @var string
     */
    protected $billingName = '';

    /**
     * @var string
     */
    protected $billingCompany = '';

    /**
     * @var string
     */
    protected $billingStreet = '';

    /**
     * @var string
     */
    protected $billingPostBox = '';

    /**
     * @var string
     */
    protected $billingZip = '';

    /**
     * @var string
     */
    protected $billingPlaceName = '';

    /**
     * @var string
     */
    protected $billingLand = '';

    /**
     * @var string
     */
    protected $billingPhone1 = '';

    /**
     * @var string
     */
    protected $billingPhone2 = '';

    /**
     * @var string
     */
    protected $billingMobile = '';

    /**
     * @var int
     */
    protected $billingLanguage = 0;

    /**
     * @var int
     */
    protected $publishingId = 0;

    /**
     * @var int
     */
    protected $deliveryId = 0;

    /**
     * @var string
     */
    protected $commissionSharing = '';

    /**
     * @var string
     */
    protected $commissionOwn = '';

    /**
     * @var string
     */
    protected $commissionPartner = '';

    /**
     * @var string
     */
    protected $agencyLogo2 = '';

    /**
     * @var string
     */
    protected $numberOfFloors = '';

    /**
     * @var string
     */
    protected $yearRenovated = '';

    /**
     * @var bool
     */
    protected $flatSharingCommunity = false;

    /**
     * @var bool
     */
    protected $cornerHouse = false;

    /**
     * @var bool
     */
    protected $middleHouse = false;

    /**
     * @var bool
     */
    protected $buildingLandConnected = false;

    /**
     * @var bool
     */
    protected $gardenhouse = false;

    /**
     * @var bool
     */
    protected $raisedGroundFloor = false;

    /**
     * @var bool
     */
    protected $newBuilding = false;

    /**
     * @var bool
     */
    protected $oldBuilding = false;

    /**
     * @var bool
     */
    protected $underBuildingLaws = false;

    /**
     * @var bool
     */
    protected $underRoof = false;

    /**
     * @var bool
     */
    protected $swimmingpool = false;

    /**
     * @var bool
     */
    protected $minergieGeneral = false;

    /**
     * @var bool
     */
    protected $minergieCertified = false;

    /**
     * @var  \DateTime
     */
    protected $lastModified;

    /**
     * @var string
     */
    protected $advertisementId = '';

    /**
     * @var string
     */
    protected $sparefield1 = '';

    /**
     * @var string
     */
    protected $sparefield2 = '';

    /**
     * @var string
     */
    protected $sparefield3 = '';

    /**
     * @var string
     */
    protected $sparefield4 = '';

    /**
     * @param mixed $value
     * @return bool
     */
    protected function sanitizeBoolean($value) {

        $sanitizedValue = $value;
        if (is_string($value) && $value === 'N') {
            $sanitizedValue = false;
        }

        return (bool)$sanitizedValue;
    }

    /**
     * @return string
     */
    public function getVersion()
    {
        return $this->version;
    }

    /**
     * @param string $version
     * @return $this
     */
    public function setVersion($version)
    {
        $this->version = $version;
        return $this;
    }

    /**
     * @return string
     */
    public function getSenderId()
    {
        return $this->senderId;
    }

    /**
     * @param string $senderId
     * @return $this
     */
    public function setSenderId($senderId)
    {
        $this->senderId = $senderId;
        return $this;
    }

    /**
     * @return string
     */
    public function getObjectCategory()
    {
        return $this->objectCategory;
    }

    /**
     * @param string $objectCategory
     * @return $this
     */
    public function setObjectCategory($objectCategory)
    {
        $this->objectCategory = $objectCategory;
        return $this;
    }

    /**
     * @return int
     */
    public function getObjectType()
    {
        return $this->objectType;
    }

    /**
     * @param int $objectType
     * @return $this
     */
    public function setObjectType($objectType)
    {
        $this->objectType = $objectType;
        return $this;
    }

    /**
     * @return string
     */
    public function getOfferType()
    {
        return $this->offerType;
    }

    /**
     * @param string $offerType
     * @return $this
     */
    public function setOfferType($offerType)
    {
        $this->offerType = $offerType;
        return $this;
    }

    /**
     * @return string
     */
    public function getRefProperty()
    {
        return $this->refProperty;
    }

    /**
     * @param string $refProperty
     * @return $this
     */
    public function setRefProperty($refProperty)
    {
        $this->refProperty = $refProperty;
        return $this;
    }

    /**
     * @return string
     */
    public function getRefHouse()
    {
        return $this->refHouse;
    }

    /**
     * @param string $refHouse
     * @return $this
     */
    public function setRefHouse($refHouse)
    {
        $this->refHouse = $refHouse;
        return $this;
    }

    /**
     * @return string
     */
    public function getRefObject()
    {
        return $this->refObject;
    }

    /**
     * @param string $refObject
     * @return $this
     */
    public function setRefObject($refObject)
    {
        $this->refObject = $refObject;
        return $this;
    }

    /**
     * @return string
     */
    public function getObjectStreet()
    {
        return $this->objectStreet;
    }

    /**
     * @param string $objectStreet
     * @return $this
     */
    public function setObjectStreet($objectStreet)
    {
        $this->objectStreet = $objectStreet;
        return $this;
    }

    /**
     * @return string
     */
    public function getObjectZip()
    {
        return $this->objectZip;
    }

    /**
     * @param string $objectZip
     * @return $this
     */
    public function setObjectZip($objectZip)
    {
        $this->objectZip = $objectZip;
        return $this;
    }

    /**
     * @return string
     */
    public function getObjectCity()
    {
        return $this->objectCity;
    }

    /**
     * @param string $objectCity
     * @return $this
     */
    public function setObjectCity($objectCity)
    {
        $this->objectCity = $objectCity;
        return $this;
    }

    /**
     * @return string
     */
    public function getObjectState()
    {
        return $this->objectState;
    }

    /**
     * @param string $objectState
     * @return $this
     */
    public function setObjectState($objectState)
    {
        $this->objectState = $objectState;
        return $this;
    }

    /**
     * @return string
     */
    public function getObjectCountry()
    {
        return $this->objectCountry;
    }

    /**
     * @param string $objectCountry
     * @return $this
     */
    public function setObjectCountry($objectCountry)
    {
        $this->objectCountry = $objectCountry;
        return $this;
    }

    /**
     * @return string
     */
    public function getRegion()
    {
        return $this->region;
    }

    /**
     * @param string $region
     * @return $this
     */
    public function setRegion($region)
    {
        $this->region = $region;
        return $this;
    }

    /**
     * @return string
     */
    public function getObjectSituation()
    {
        return $this->objectSituation;
    }

    /**
     * @param string $objectSituation
     * @return $this
     */
    public function setObjectSituation($objectSituation)
    {
        $this->objectSituation = $objectSituation;
        return $this;
    }

    /**
     * @return \DateTime
     */
    public function getAvailableFrom()
    {
        return $this->availableFrom;
    }

    /**
     * @param \DateTime $availableFrom
     * @return $this
     */
    public function setAvailableFrom($availableFrom)
    {
        $this->availableFrom = $availableFrom;
        return $this;
    }

    /**
     * @return string
     */
    public function getObjectTitle()
    {
        return $this->objectTitle;
    }

    /**
     * @param string $objectTitle
     * @return $this
     */
    public function setObjectTitle($objectTitle)
    {
        $this->objectTitle = $objectTitle;
        return $this;
    }

    /**
     * @return string
     */
    public function getObjectDescription()
    {
        return $this->objectDescription;
    }

    /**
     * @param string $objectDescription
     * @return $this
     */
    public function setObjectDescription($objectDescription)
    {
        $this->objectDescription = $objectDescription;
        return $this;
    }

    /**
     * @return int
     */
    public function getSellingPrice()
    {
        return $this->sellingPrice;
    }

    /**
     * @param int $sellingPrice
     * @return $this
     */
    public function setSellingPrice($sellingPrice)
    {
        $this->sellingPrice = $sellingPrice;
        return $this;
    }

    /**
     * @return int
     */
    public function getRentNet()
    {
        return $this->rentNet;
    }

    /**
     * @param int $rentNet
     * @return $this
     */
    public function setRentNet($rentNet)
    {
        $this->rentNet = $rentNet;
        return $this;
    }

    /**
     * @return int
     */
    public function getRentExtra()
    {
        return $this->rentExtra;
    }

    /**
     * @param int $rentExtra
     * @return $this
     */
    public function setRentExtra($rentExtra)
    {
        $this->rentExtra = $rentExtra;
        return $this;
    }

    /**
     * @return string
     */
    public function getPriceUnit()
    {
        return $this->priceUnit;
    }

    /**
     * @param string $priceUnit
     * @return $this
     */
    public function setPriceUnit($priceUnit)
    {
        $this->priceUnit = $priceUnit;
        return $this;
    }

    /**
     * @return string
     */
    public function getCurrency()
    {
        return $this->currency;
    }

    /**
     * @param string $currency
     * @return $this
     */
    public function setCurrency($currency)
    {
        $this->currency = $currency;
        return $this;
    }

    /**
     * @return string
     */
    public function getGrossPremium()
    {
        return $this->grossPremium;
    }

    /**
     * @param string $grossPremium
     * @return $this
     */
    public function setGrossPremium($grossPremium)
    {
        $this->grossPremium = $grossPremium;
        return $this;
    }

    /**
     * @return int
     */
    public function getFloor()
    {
        return $this->floor;
    }

    /**
     * @param int $floor
     * @return $this
     */
    public function setFloor($floor)
    {
        $this->floor = $floor;
        return $this;
    }

    /**
     * @return int
     */
    public function getNumberOfRooms()
    {
        return $this->numberOfRooms;
    }

    /**
     * @param int $numberOfRooms
     * @return $this
     */
    public function setNumberOfRooms($numberOfRooms)
    {
        $this->numberOfRooms = $numberOfRooms;
        return $this;
    }

    /**
     * @return int
     */
    public function getNumberOfApartments()
    {
        return $this->numberOfApartments;
    }

    /**
     * @param int $numberOfApartments
     * @return $this
     */
    public function setNumberOfApartments($numberOfApartments)
    {
        $this->numberOfApartments = $numberOfApartments;
        return $this;
    }

    /**
     * @return int
     */
    public function getSurfaceLiving()
    {
        return $this->surfaceLiving;
    }

    /**
     * @param int $surfaceLiving
     * @return $this
     */
    public function setSurfaceLiving($surfaceLiving)
    {
        $this->surfaceLiving = $surfaceLiving;
        return $this;
    }

    /**
     * @return int
     */
    public function getSurfaceProperty()
    {
        return $this->surfaceProperty;
    }

    /**
     * @param int $surfaceProperty
     * @return $this
     */
    public function setSurfaceProperty($surfaceProperty)
    {
        $this->surfaceProperty = $surfaceProperty;
        return $this;
    }

    /**
     * @return int
     */
    public function getSurfaceUsable()
    {
        return $this->surfaceUsable;
    }

    /**
     * @param int $surfaceUsable
     * @return $this
     */
    public function setSurfaceUsable($surfaceUsable)
    {
        $this->surfaceUsable = $surfaceUsable;
        return $this;
    }

    /**
     * @return int
     */
    public function getVolume()
    {
        return $this->volume;
    }

    /**
     * @param int $volume
     * @return $this
     */
    public function setVolume($volume)
    {
        $this->volume = $volume;
        return $this;
    }

    /**
     * @return int
     */
    public function getYearBuilt()
    {
        return $this->yearBuilt;
    }

    /**
     * @param int $yearBuilt
     * @return $this
     */
    public function setYearBuilt($yearBuilt)
    {
        $this->yearBuilt = $yearBuilt;
        return $this;
    }

    /**
     * @return bool
     */
    public function getView()
    {
        return $this->view;
    }

    /**
     * @param bool $view
     * @return $this
     */
    public function setView($view)
    {
        $this->view = $this->sanitizeBoolean($view);
        return $this;
    }

    /**
     * @return bool
     */
    public function getFireplace()
    {
        return $this->fireplace;
    }

    /**
     * @param bool $fireplace
     * @return $this
     */
    public function setFireplace($fireplace)
    {
        $this->fireplace = $this->sanitizeBoolean($fireplace);
        return $this;
    }

    /**
     * @return bool
     */
    public function getCabletv()
    {
        return $this->cabletv;
    }

    /**
     * @param bool $cabletv
     * @return $this
     */
    public function setCabletv($cabletv)
    {
        $this->cabletv = $this->sanitizeBoolean($cabletv);
        return $this;
    }

    /**
     * @return bool
     */
    public function getElevator()
    {
        return $this->elevator;
    }

    /**
     * @param bool $elevator
     * @return $this
     */
    public function setElevator($elevator)
    {
        $this->elevator = $this->sanitizeBoolean($elevator);
        return $this;
    }

    /**
     * @return bool
     */
    public function getChildFriendly()
    {
        return $this->childFriendly;
    }

    /**
     * @param bool $childFriendly
     * @return $this
     */
    public function setChildFriendly($childFriendly)
    {
        $this->childFriendly = $this->sanitizeBoolean($childFriendly);
        return $this;
    }

    /**
     * @return bool
     */
    public function getParking()
    {
        return $this->parking;
    }

    /**
     * @param bool $parking
     * @return $this
     */
    public function setParking($parking)
    {
        $this->parking = $this->sanitizeBoolean($parking);
        return $this;
    }

    /**
     * @return bool
     */
    public function getGarage()
    {
        return $this->garage;
    }

    /**
     * @param bool $garage
     * @return $this
     */
    public function setGarage($garage)
    {
        $this->garage = $this->sanitizeBoolean($garage);
        return $this;
    }

    /**
     * @return bool
     */
    public function getBalcony()
    {
        return $this->balcony;
    }

    /**
     * @param bool $balcony
     * @return $this
     */
    public function setBalcony($balcony)
    {
        $this->balcony = $this->sanitizeBoolean($balcony);
        return $this;
    }

    /**
     * @return bool
     */
    public function getRoofFloor()
    {
        return $this->roofFloor;
    }

    /**
     * @param bool $roofFloor
     * @return $this
     */
    public function setRoofFloor($roofFloor)
    {
        $this->roofFloor = $this->sanitizeBoolean($roofFloor);
        return $this;
    }

    /**
     * @return int
     */
    public function getDistancePublicTransport()
    {
        return $this->distancePublicTransport;
    }

    /**
     * @param int $distancePublicTransport
     * @return $this
     */
    public function setDistancePublicTransport($distancePublicTransport)
    {
        $this->distancePublicTransport = $distancePublicTransport;
        return $this;
    }

    /**
     * @return int
     */
    public function getDistanceShop()
    {
        return $this->distanceShop;
    }

    /**
     * @param int $distanceShop
     * @return $this
     */
    public function setDistanceShop($distanceShop)
    {
        $this->distanceShop = $distanceShop;
        return $this;
    }

    /**
     * @return int
     */
    public function getDistanceKindergarten()
    {
        return $this->distanceKindergarten;
    }

    /**
     * @param int $distanceKindergarten
     * @return $this
     */
    public function setDistanceKindergarten($distanceKindergarten)
    {
        $this->distanceKindergarten = $distanceKindergarten;
        return $this;
    }

    /**
     * @return int
     */
    public function getDistanceSchool1()
    {
        return $this->distanceSchool1;
    }

    /**
     * @param int $distanceSchool1
     * @return $this
     */
    public function setDistanceSchool1($distanceSchool1)
    {
        $this->distanceSchool1 = $distanceSchool1;
        return $this;
    }

    /**
     * @return int
     */
    public function getDistanceSchool2()
    {
        return $this->distanceSchool2;
    }

    /**
     * @param int $distanceSchool2
     * @return $this
     */
    public function setDistanceSchool2($distanceSchool2)
    {
        $this->distanceSchool2 = $distanceSchool2;
        return $this;
    }

    /**
     * @return Picture[]
     */
    public function getPictures()
    {
        return $this->pictures;
    }

    /**
     * @param Picture[] $pictures
     * @return $this
     */
    public function setPictures($pictures)
    {
        $this->pictures = $pictures;
        return $this;
    }

    /**
     * @return string
     */
    public function getMovieFilename()
    {
        return $this->movieFilename;
    }

    /**
     * @param string $movieFilename
     * @return $this
     */
    public function setMovieFilename($movieFilename)
    {
        $this->movieFilename = $movieFilename;
        return $this;
    }

    /**
     * @return string
     */
    public function getMovieTitle()
    {
        return $this->movieTitle;
    }

    /**
     * @param string $movieTitle
     * @return $this
     */
    public function setMovieTitle($movieTitle)
    {
        $this->movieTitle = $movieTitle;
        return $this;
    }

    /**
     * @return string
     */
    public function getMovieDescription()
    {
        return $this->movieDescription;
    }

    /**
     * @param string $movieDescription
     * @return $this
     */
    public function setMovieDescription($movieDescription)
    {
        $this->movieDescription = $movieDescription;
        return $this;
    }

    /**
     * @return string
     */
    public function getDocumentFilename()
    {
        return $this->documentFilename;
    }

    /**
     * @param string $documentFilename
     * @return $this
     */
    public function setDocumentFilename($documentFilename)
    {
        $this->documentFilename = $documentFilename;
        return $this;
    }

    /**
     * @return string
     */
    public function getDocumentTitle()
    {
        return $this->documentTitle;
    }

    /**
     * @param string $documentTitle
     * @return $this
     */
    public function setDocumentTitle($documentTitle)
    {
        $this->documentTitle = $documentTitle;
        return $this;
    }

    /**
     * @return string
     */
    public function getDocumentDescription()
    {
        return $this->documentDescription;
    }

    /**
     * @param string $documentDescription
     * @return $this
     */
    public function setDocumentDescription($documentDescription)
    {
        $this->documentDescription = $documentDescription;
        return $this;
    }

    /**
     * @return string
     */
    public function getUrl()
    {
        return $this->url;
    }

    /**
     * @param string $url
     * @return $this
     */
    public function setUrl($url)
    {
        $this->url = $url;
        return $this;
    }

    /**
     * @return string
     */
    public function getAgencyId()
    {
        return $this->agencyId;
    }

    /**
     * @param string $agencyId
     * @return $this
     */
    public function setAgencyId($agencyId)
    {
        $this->agencyId = $agencyId;
        return $this;
    }

    /**
     * @return string
     */
    public function getAgencyName()
    {
        return $this->agencyName;
    }

    /**
     * @param string $agencyName
     * @return $this
     */
    public function setAgencyName($agencyName)
    {
        $this->agencyName = $agencyName;
        return $this;
    }

    /**
     * @return string
     */
    public function getAgencyName2()
    {
        return $this->agencyName2;
    }

    /**
     * @param string $agencyName2
     * @return $this
     */
    public function setAgencyName2($agencyName2)
    {
        $this->agencyName2 = $agencyName2;
        return $this;
    }

    /**
     * @return string
     */
    public function getAgencyReference()
    {
        return $this->agencyReference;
    }

    /**
     * @param string $agencyReference
     * @return $this
     */
    public function setAgencyReference($agencyReference)
    {
        $this->agencyReference = $agencyReference;
        return $this;
    }

    /**
     * @return string
     */
    public function getAgencyStreet()
    {
        return $this->agencyStreet;
    }

    /**
     * @param string $agencyStreet
     * @return $this
     */
    public function setAgencyStreet($agencyStreet)
    {
        $this->agencyStreet = $agencyStreet;
        return $this;
    }

    /**
     * @return string
     */
    public function getAgencyZip()
    {
        return $this->agencyZip;
    }

    /**
     * @param string $agencyZip
     * @return $this
     */
    public function setAgencyZip($agencyZip)
    {
        $this->agencyZip = $agencyZip;
        return $this;
    }

    /**
     * @return string
     */
    public function getAgencyCity()
    {
        return $this->agencyCity;
    }

    /**
     * @param string $agencyCity
     * @return $this
     */
    public function setAgencyCity($agencyCity)
    {
        $this->agencyCity = $agencyCity;
        return $this;
    }

    /**
     * @return string
     */
    public function getAgencyCountry()
    {
        return $this->agencyCountry;
    }

    /**
     * @param string $agencyCountry
     * @return $this
     */
    public function setAgencyCountry($agencyCountry)
    {
        $this->agencyCountry = $agencyCountry;
        return $this;
    }

    /**
     * @return string
     */
    public function getAgencyPhone()
    {
        return $this->agencyPhone;
    }

    /**
     * @param string $agencyPhone
     * @return $this
     */
    public function setAgencyPhone($agencyPhone)
    {
        $this->agencyPhone = $agencyPhone;
        return $this;
    }

    /**
     * @return string
     */
    public function getAgencyMobile()
    {
        return $this->agencyMobile;
    }

    /**
     * @param string $agencyMobile
     * @return $this
     */
    public function setAgencyMobile($agencyMobile)
    {
        $this->agencyMobile = $agencyMobile;
        return $this;
    }

    /**
     * @return string
     */
    public function getAgencyFax()
    {
        return $this->agencyFax;
    }

    /**
     * @param string $agencyFax
     * @return $this
     */
    public function setAgencyFax($agencyFax)
    {
        $this->agencyFax = $agencyFax;
        return $this;
    }

    /**
     * @return string
     */
    public function getAgencyEmail()
    {
        return $this->agencyEmail;
    }

    /**
     * @param string $agencyEmail
     * @return $this
     */
    public function setAgencyEmail($agencyEmail)
    {
        $this->agencyEmail = $agencyEmail;
        return $this;
    }

    /**
     * @return string
     */
    public function getAgencyLogo()
    {
        return $this->agencyLogo;
    }

    /**
     * @param string $agencyLogo
     * @return $this
     */
    public function setAgencyLogo($agencyLogo)
    {
        $this->agencyLogo = $agencyLogo;
        return $this;
    }

    /**
     * @return string
     */
    public function getVisitName()
    {
        return $this->visitName;
    }

    /**
     * @param string $visitName
     * @return $this
     */
    public function setVisitName($visitName)
    {
        $this->visitName = $visitName;
        return $this;
    }

    /**
     * @return string
     */
    public function getVisitPhone()
    {
        return $this->visitPhone;
    }

    /**
     * @param string $visitPhone
     * @return $this
     */
    public function setVisitPhone($visitPhone)
    {
        $this->visitPhone = $visitPhone;
        return $this;
    }

    /**
     * @return string
     */
    public function getVisitEmail()
    {
        return $this->visitEmail;
    }

    /**
     * @param string $visitEmail
     * @return $this
     */
    public function setVisitEmail($visitEmail)
    {
        $this->visitEmail = $visitEmail;
        return $this;
    }

    /**
     * @return string
     */
    public function getVisitRemark()
    {
        return $this->visitRemark;
    }

    /**
     * @param string $visitRemark
     * @return $this
     */
    public function setVisitRemark($visitRemark)
    {
        $this->visitRemark = $visitRemark;
        return $this;
    }

    /**
     * @return \DateTime
     */
    public function getPublishUntil()
    {
        return $this->publishUntil;
    }

    /**
     * @param \DateTime $publishUntil
     * @return $this
     */
    public function setPublishUntil($publishUntil)
    {
        $this->publishUntil = $publishUntil;
        return $this;
    }

    /**
     * @return string
     */
    public function getDestination()
    {
        return $this->destination;
    }

    /**
     * @param string $destination
     * @return $this
     */
    public function setDestination($destination)
    {
        $this->destination = $destination;
        return $this;
    }

    /**
     * @return int
     */
    public function getDistanceMotorway()
    {
        return $this->distanceMotorway;
    }

    /**
     * @param int $distanceMotorway
     * @return $this
     */
    public function setDistanceMotorway($distanceMotorway)
    {
        $this->distanceMotorway = $distanceMotorway;
        return $this;
    }

    /**
     * @return int
     */
    public function getCeilingHeight()
    {
        return $this->ceilingHeight;
    }

    /**
     * @param int $ceilingHeight
     * @return $this
     */
    public function setCeilingHeight($ceilingHeight)
    {
        $this->ceilingHeight = $ceilingHeight;
        return $this;
    }

    /**
     * @return int
     */
    public function getHallHeight()
    {
        return $this->hallHeight;
    }

    /**
     * @param int $hallHeight
     * @return $this
     */
    public function setHallHeight($hallHeight)
    {
        $this->hallHeight = $hallHeight;
        return $this;
    }

    /**
     * @return int
     */
    public function getMaximalFloorLoading()
    {
        return $this->maximalFloorLoading;
    }

    /**
     * @param int $maximalFloorLoading
     * @return $this
     */
    public function setMaximalFloorLoading($maximalFloorLoading)
    {
        $this->maximalFloorLoading = $maximalFloorLoading;
        return $this;
    }

    /**
     * @return int
     */
    public function getCarryingCapacityCrane()
    {
        return $this->carryingCapacityCrane;
    }

    /**
     * @param int $carryingCapacityCrane
     * @return $this
     */
    public function setCarryingCapacityCrane($carryingCapacityCrane)
    {
        $this->carryingCapacityCrane = $carryingCapacityCrane;
        return $this;
    }

    /**
     * @return int
     */
    public function getCarryingCapacityElevator()
    {
        return $this->carryingCapacityElevator;
    }

    /**
     * @param int $carryingCapacityElevator
     * @return $this
     */
    public function setCarryingCapacityElevator($carryingCapacityElevator)
    {
        $this->carryingCapacityElevator = $carryingCapacityElevator;
        return $this;
    }

    /**
     * @return bool
     */
    public function getIsdn()
    {
        return $this->isdn;
    }

    /**
     * @param bool $isdn
     * @return $this
     */
    public function setIsdn($isdn)
    {
        $this->isdn = $this->sanitizeBoolean($isdn);
        return $this;
    }

    /**
     * @return bool
     */
    public function getWheelchairAccessible()
    {
        return $this->wheelchairAccessible;
    }

    /**
     * @param bool $wheelchairAccessible
     * @return $this
     */
    public function setWheelchairAccessible($wheelchairAccessible)
    {
        $this->wheelchairAccessible = $this->sanitizeBoolean($wheelchairAccessible);
        return $this;
    }

    /**
     * @return bool
     */
    public function getAnimalAllowed()
    {
        return $this->animalAllowed;
    }

    /**
     * @param bool $animalAllowed
     * @return $this
     */
    public function setAnimalAllowed($animalAllowed)
    {
        $this->animalAllowed = $this->sanitizeBoolean($animalAllowed);
        return $this;
    }

    /**
     * @return bool
     */
    public function getRamp()
    {
        return $this->ramp;
    }

    /**
     * @param bool $ramp
     * @return $this
     */
    public function setRamp($ramp)
    {
        $this->ramp = $this->sanitizeBoolean($ramp);
        return $this;
    }

    /**
     * @return bool
     */
    public function getLiftingPlatform()
    {
        return $this->liftingPlatform;
    }

    /**
     * @param bool $liftingPlatform
     * @return $this
     */
    public function setLiftingPlatform($liftingPlatform)
    {
        $this->liftingPlatform = $this->sanitizeBoolean($liftingPlatform);
        return $this;
    }

    /**
     * @return bool
     */
    public function getRailwayTerminal()
    {
        return $this->railwayTerminal;
    }

    /**
     * @param bool $railwayTerminal
     * @return $this
     */
    public function setRailwayTerminal($railwayTerminal)
    {
        $this->railwayTerminal = $this->sanitizeBoolean($railwayTerminal);
        return $this;
    }

    /**
     * @return bool
     */
    public function getRestrooms()
    {
        return $this->restrooms;
    }

    /**
     * @param bool $restrooms
     * @return $this
     */
    public function setRestrooms($restrooms)
    {
        $this->restrooms = $this->sanitizeBoolean($restrooms);
        return $this;
    }

    /**
     * @return bool
     */
    public function getWaterSupply()
    {
        return $this->waterSupply;
    }

    /**
     * @param bool $waterSupply
     * @return $this
     */
    public function setWaterSupply($waterSupply)
    {
        $this->waterSupply = $this->sanitizeBoolean($waterSupply);
        return $this;
    }

    /**
     * @return bool
     */
    public function getSewageSupply()
    {
        return $this->sewageSupply;
    }

    /**
     * @param bool $sewageSupply
     * @return $this
     */
    public function setSewageSupply($sewageSupply)
    {
        $this->sewageSupply = $this->sanitizeBoolean($sewageSupply);
        return $this;
    }

    /**
     * @return bool
     */
    public function getPowerSupply()
    {
        return $this->powerSupply;
    }

    /**
     * @param bool $powerSupply
     * @return $this
     */
    public function setPowerSupply($powerSupply)
    {
        $this->powerSupply = $this->sanitizeBoolean($powerSupply);
        return $this;
    }

    /**
     * @return bool
     */
    public function getGasSupply()
    {
        return $this->gasSupply;
    }

    /**
     * @param bool $gasSupply
     * @return $this
     */
    public function setGasSupply($gasSupply)
    {
        $this->gasSupply = $this->sanitizeBoolean($gasSupply);
        return $this;
    }

    /**
     * @return string
     */
    public function getMunicipalInfo()
    {
        return $this->municipalInfo;
    }

    /**
     * @param string $municipalInfo
     * @return $this
     */
    public function setMunicipalInfo($municipalInfo)
    {
        $this->municipalInfo = $municipalInfo;
        return $this;
    }

    /**
     * @return string
     */
    public function getOwnObjectUrl()
    {
        return $this->ownObjectUrl;
    }

    /**
     * @param string $ownObjectUrl
     * @return $this
     */
    public function setOwnObjectUrl($ownObjectUrl)
    {
        $this->ownObjectUrl = $ownObjectUrl;
        return $this;
    }

    /**
     * @return int
     */
    public function getBillingSalutation()
    {
        return $this->billingSalutation;
    }

    /**
     * @param int $billingSalutation
     * @return $this
     */
    public function setBillingSalutation($billingSalutation)
    {
        $this->billingSalutation = $billingSalutation;
        return $this;
    }

    /**
     * @return string
     */
    public function getBillingFirstName()
    {
        return $this->billingFirstName;
    }

    /**
     * @param string $billingFirstName
     * @return $this
     */
    public function setBillingFirstName($billingFirstName)
    {
        $this->billingFirstName = $billingFirstName;
        return $this;
    }

    /**
     * @return string
     */
    public function getBillingName()
    {
        return $this->billingName;
    }

    /**
     * @param string $billingName
     * @return $this
     */
    public function setBillingName($billingName)
    {
        $this->billingName = $billingName;
        return $this;
    }

    /**
     * @return string
     */
    public function getBillingCompany()
    {
        return $this->billingCompany;
    }

    /**
     * @param string $billingCompany
     * @return $this
     */
    public function setBillingCompany($billingCompany)
    {
        $this->billingCompany = $billingCompany;
        return $this;
    }

    /**
     * @return string
     */
    public function getBillingStreet()
    {
        return $this->billingStreet;
    }

    /**
     * @param string $billingStreet
     * @return $this
     */
    public function setBillingStreet($billingStreet)
    {
        $this->billingStreet = $billingStreet;
        return $this;
    }

    /**
     * @return string
     */
    public function getBillingPostBox()
    {
        return $this->billingPostBox;
    }

    /**
     * @param string $billingPostBox
     * @return $this
     */
    public function setBillingPostBox($billingPostBox)
    {
        $this->billingPostBox = $billingPostBox;
        return $this;
    }

    /**
     * @return string
     */
    public function getBillingZip()
    {
        return $this->billingZip;
    }

    /**
     * @param string $billingZip
     * @return $this
     */
    public function setBillingZip($billingZip)
    {
        $this->billingZip = $billingZip;
        return $this;
    }

    /**
     * @return string
     */
    public function getBillingPlaceName()
    {
        return $this->billingPlaceName;
    }

    /**
     * @param string $billingPlaceName
     * @return $this
     */
    public function setBillingPlaceName($billingPlaceName)
    {
        $this->billingPlaceName = $billingPlaceName;
        return $this;
    }

    /**
     * @return string
     */
    public function getBillingLand()
    {
        return $this->billingLand;
    }

    /**
     * @param string $billingLand
     * @return $this
     */
    public function setBillingLand($billingLand)
    {
        $this->billingLand = $billingLand;
        return $this;
    }

    /**
     * @return string
     */
    public function getBillingPhone1()
    {
        return $this->billingPhone1;
    }

    /**
     * @param string $billingPhone1
     * @return $this
     */
    public function setBillingPhone1($billingPhone1)
    {
        $this->billingPhone1 = $billingPhone1;
        return $this;
    }

    /**
     * @return string
     */
    public function getBillingPhone2()
    {
        return $this->billingPhone2;
    }

    /**
     * @param string $billingPhone2
     * @return $this
     */
    public function setBillingPhone2($billingPhone2)
    {
        $this->billingPhone2 = $billingPhone2;
        return $this;
    }

    /**
     * @return string
     */
    public function getBillingMobile()
    {
        return $this->billingMobile;
    }

    /**
     * @param string $billingMobile
     * @return $this
     */
    public function setBillingMobile($billingMobile)
    {
        $this->billingMobile = $billingMobile;
        return $this;
    }

    /**
     * @return int
     */
    public function getBillingLanguage()
    {
        return $this->billingLanguage;
    }

    /**
     * @param int $billingLanguage
     * @return $this
     */
    public function setBillingLanguage($billingLanguage)
    {
        $this->billingLanguage = $billingLanguage;
        return $this;
    }

    /**
     * @return int
     */
    public function getPublishingId()
    {
        return $this->publishingId;
    }

    /**
     * @param int $publishingId
     * @return $this
     */
    public function setPublishingId($publishingId)
    {
        $this->publishingId = $publishingId;
        return $this;
    }

    /**
     * @return int
     */
    public function getDeliveryId()
    {
        return $this->deliveryId;
    }

    /**
     * @param int $deliveryId
     * @return $this
     */
    public function setDeliveryId($deliveryId)
    {
        $this->deliveryId = $deliveryId;
        return $this;
    }

    /**
     * @return string
     */
    public function getCommissionSharing()
    {
        return $this->commissionSharing;
    }

    /**
     * @param string $commissionSharing
     * @return $this
     */
    public function setCommissionSharing($commissionSharing)
    {
        $this->commissionSharing = $commissionSharing;
        return $this;
    }

    /**
     * @return string
     */
    public function getCommissionOwn()
    {
        return $this->commissionOwn;
    }

    /**
     * @param string $commissionOwn
     * @return $this
     */
    public function setCommissionOwn($commissionOwn)
    {
        $this->commissionOwn = $commissionOwn;
        return $this;
    }

    /**
     * @return string
     */
    public function getCommissionPartner()
    {
        return $this->commissionPartner;
    }

    /**
     * @param string $commissionPartner
     * @return $this
     */
    public function setCommissionPartner($commissionPartner)
    {
        $this->commissionPartner = $commissionPartner;
        return $this;
    }

    /**
     * @return string
     */
    public function getAgencyLogo2()
    {
        return $this->agencyLogo2;
    }

    /**
     * @param string $agencyLogo2
     * @return $this
     */
    public function setAgencyLogo2($agencyLogo2)
    {
        $this->agencyLogo2 = $agencyLogo2;
        return $this;
    }

    /**
     * @return string
     */
    public function getNumberOfFloors()
    {
        return $this->numberOfFloors;
    }

    /**
     * @param string $numberOfFloors
     * @return $this
     */
    public function setNumberOfFloors($numberOfFloors)
    {
        $this->numberOfFloors = $numberOfFloors;
        return $this;
    }

    /**
     * @return string
     */
    public function getYearRenovated()
    {
        return $this->yearRenovated;
    }

    /**
     * @param string $yearRenovated
     * @return $this
     */
    public function setYearRenovated($yearRenovated)
    {
        $this->yearRenovated = $yearRenovated;
        return $this;
    }

    /**
     * @return bool
     */
    public function getFlatSharingCommunity()
    {
        return $this->flatSharingCommunity;
    }

    /**
     * @param bool $flatSharingCommunity
     * @return $this
     */
    public function setFlatSharingCommunity($flatSharingCommunity)
    {
        $this->flatSharingCommunity = $this->sanitizeBoolean($flatSharingCommunity);
        return $this;
    }

    /**
     * @return bool
     */
    public function getCornerHouse()
    {
        return $this->cornerHouse;
    }

    /**
     * @param bool $cornerHouse
     * @return $this
     */
    public function setCornerHouse($cornerHouse)
    {
        $this->cornerHouse = $this->sanitizeBoolean($cornerHouse);
        return $this;
    }

    /**
     * @return bool
     */
    public function getMiddleHouse()
    {
        return $this->middleHouse;
    }

    /**
     * @param bool $middleHouse
     * @return $this
     */
    public function setMiddleHouse($middleHouse)
    {
        $this->middleHouse = $this->sanitizeBoolean($middleHouse);
        return $this;
    }

    /**
     * @return bool
     */
    public function getBuildingLandConnected()
    {
        return $this->buildingLandConnected;
    }

    /**
     * @param bool $buildingLandConnected
     * @return $this
     */
    public function setBuildingLandConnected($buildingLandConnected)
    {
        $this->buildingLandConnected = $this->sanitizeBoolean($buildingLandConnected);
        return $this;
    }

    /**
     * @return bool
     */
    public function getGardenhouse()
    {
        return $this->gardenhouse;
    }

    /**
     * @param bool $gardenhouse
     * @return $this
     */
    public function setGardenhouse($gardenhouse)
    {
        $this->gardenhouse = $this->sanitizeBoolean($gardenhouse);
        return $this;
    }

    /**
     * @return bool
     */
    public function getRaisedGroundFloor()
    {
        return $this->raisedGroundFloor;
    }

    /**
     * @param bool $raisedGroundFloor
     * @return $this
     */
    public function setRaisedGroundFloor($raisedGroundFloor)
    {
        $this->raisedGroundFloor = $this->sanitizeBoolean($raisedGroundFloor);
        return $this;
    }

    /**
     * @return bool
     */
    public function getNewBuilding()
    {
        return $this->newBuilding;
    }

    /**
     * @param bool $newBuilding
     * @return $this
     */
    public function setNewBuilding($newBuilding)
    {
        $this->newBuilding = $this->sanitizeBoolean($newBuilding);
        return $this;
    }

    /**
     * @return bool
     */
    public function getOldBuilding()
    {
        return $this->oldBuilding;
    }

    /**
     * @param bool $oldBuilding
     * @return $this
     */
    public function setOldBuilding($oldBuilding)
    {
        $this->oldBuilding = $this->sanitizeBoolean($oldBuilding);
        return $this;
    }

    /**
     * @return bool
     */
    public function getUnderBuildingLaws()
    {
        return $this->underBuildingLaws;
    }

    /**
     * @param bool $underBuildingLaws
     * @return $this
     */
    public function setUnderBuildingLaws($underBuildingLaws)
    {
        $this->underBuildingLaws = $this->sanitizeBoolean($underBuildingLaws);
        return $this;
    }

    /**
     * @return bool
     */
    public function getUnderRoof()
    {
        return $this->underRoof;
    }

    /**
     * @param bool $underRoof
     * @return $this
     */
    public function setUnderRoof($underRoof)
    {
        $this->underRoof = $this->sanitizeBoolean($underRoof);
        return $this;
    }

    /**
     * @return bool
     */
    public function getSwimmingpool()
    {
        return $this->swimmingpool;
    }

    /**
     * @param bool $swimmingpool
     * @return $this
     */
    public function setSwimmingpool($swimmingpool)
    {
        $this->swimmingpool = $this->sanitizeBoolean($swimmingpool);
        return $this;
    }

    /**
     * @return bool
     */
    public function getMinergieGeneral()
    {
        return $this->minergieGeneral;
    }

    /**
     * @param bool $minergieGeneral
     * @return $this
     */
    public function setMinergieGeneral($minergieGeneral)
    {
        $this->minergieGeneral = $this->sanitizeBoolean($minergieGeneral);
        return $this;
    }

    /**
     * @return bool
     */
    public function getMinergieCertified()
    {
        return $this->minergieCertified;
    }

    /**
     * @param bool $minergieCertified
     * @return $this
     */
    public function setMinergieCertified($minergieCertified)
    {
        $this->minergieCertified = $this->sanitizeBoolean($minergieCertified);
        return $this;
    }

    /**
     * @return \DateTime
     */
    public function getLastModified()
    {
        return $this->lastModified;
    }

    /**
     * @param \DateTime $lastModified
     * @return $this
     */
    public function setLastModified($lastModified)
    {
        $this->lastModified = $lastModified;
        return $this;
    }

    /**
     * @return string
     */
    public function getAdvertisementId()
    {
        return $this->advertisementId;
    }

    /**
     * @param string $advertisementId
     * @return $this
     */
    public function setAdvertisementId($advertisementId)
    {
        $this->advertisementId = $advertisementId;
        return $this;
    }

    /**
     * @return string
     */
    public function getSparefield1()
    {
        return $this->sparefield1;
    }

    /**
     * @param string $sparefield1
     * @return $this
     */
    public function setSparefield1($sparefield1)
    {
        $this->sparefield1 = $sparefield1;
        return $this;
    }

    /**
     * @return string
     */
    public function getSparefield2()
    {
        return $this->sparefield2;
    }

    /**
     * @param string $sparefield2
     * @return $this
     */
    public function setSparefield2($sparefield2)
    {
        $this->sparefield2 = $sparefield2;
        return $this;
    }

    /**
     * @return string
     */
    public function getSparefield3()
    {
        return $this->sparefield3;
    }

    /**
     * @param string $sparefield3
     * @return $this
     */
    public function setSparefield3($sparefield3)
    {
        $this->sparefield3 = $sparefield3;
        return $this;
    }

    /**
     * @return string
     */
    public function getSparefield4()
    {
        return $this->sparefield4;
    }

    /**
     * @param string $sparefield4
     * @return $this
     */
    public function setSparefield4($sparefield4)
    {
        $this->sparefield4 = $sparefield4;
        return $this;
    }

}
