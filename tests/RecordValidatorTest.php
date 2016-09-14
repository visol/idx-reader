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
use Visol\IdxReader\Record;
use Visol\IdxReader\RecordValidator;

/**
 * Class RecordValidatorTest
 */
class RecordValidatorTest extends TestCase
{

    /**
     * @test
     */
    public function canBeInstantiated()
    {

        self::assertInstanceOf(RecordValidator::class, new RecordValidator());
    }

    /**
     * @test
     * @expectedException \RuntimeException
     */
    public function validateInvalidRecordRaisesARuntimeException()
    {
        $fixture = new RecordValidator();
        $fixture->validate($this->getInvalidRecord());
    }

    /**
     * @test
     */
    public function canValidateRecordObject()
    {
        $fixture = new RecordValidator();
        $fixture->validate($this->getValidRecord());
    }

    /**
     * @test
     */
    public function canSetMappingAndValidateDefaultInvalidRecordObject()
    {
        $fixture = new RecordValidator();
        $fixture->setMandatoryFields(['version']);

        $record = $this->getValidRecord()->setVersion('foo');
        $fixture->validate($record);
    }
    /**
     * @return Record
     */
    private function getValidRecord() {
        $record = new Record();
        $record->setVersion('foo')
            ->setSenderId('foo')
            ->setObjectCategory('foo')
            ->setObjectType(1)
            ->setOfferType('foo')
            ->setRefProperty('foo')
            ->setRefHouse('foo')
            ->setRefObject('foo')
            ->setObjectStreet('foo')
            ->setObjectZip('foo')
            ->setObjectCity('foo')
            ->setObjectCountry('foo')
            ->setObjectTitle('foo')
            ->setObjectDescription('foo')
            ->setSellingPrice(10)
            ->setRentNet(10)
            ->setRentExtra(10)
            ->setPriceUnit('foo')
            ->setCurrency('foo')
            ->setAgencyId('foo');
        return $record;
    }
    /**
     * @return Record
     */
    private function getInvalidRecord() {
        return new Record();
    }

}
