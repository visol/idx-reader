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
use Visol\IdxReader\Picture;

/**
 * Class PictureTest
 */
class PictureTest extends TestCase
{
    /**
     * @var Picture
     */
    protected $fixture;

    /**
     * This method is called before a test is executed.
     */
    protected function setUp()
    {
        $this->fixture = new Picture();
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
        self::assertInstanceOf(Picture::class, $this->fixture);
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
            ['filename', 'string',],
            ['title', 'string',],
            ['description', 'string',],
            ['url', 'string',],
        ];
    }

}
