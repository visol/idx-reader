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
use Visol\IdxReader\FieldConverter;

/**
 * Class FieldConverterTest
 */
class FieldConverterTest extends TestCase
{
    /**
     * @test
     */
    public function canBeInstantiated()
    {
        $fixture = new FieldConverter('foo');
        self::assertInstanceOf(FieldConverter::class, $fixture);
    }

    /**
     * @test
     */
    public function canConvertToProperty()
    {
        $fixture = new FieldConverter('foo_bar');
        self::assertEquals('FooBar', $fixture->toProperty());
    }

}
