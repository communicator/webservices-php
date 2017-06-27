<?php

/*
 * CommunicatorCorp\Client
 *
 * Copyright © 2015 Rippleffect Studio Ltd
 * Rights reserved.
 *
 * PHP version 5.4+
 */

namespace CommunicatorCorp\Client\Test\EnumerationType;

use MyCLabs\Enum\Enum;

/**
 * Provides a convenient way of testing an enum
 *
 * @package CommunicatorCorp\Client
 * @author  Daniel Morris <daniel@rippleffect.com>
 */
abstract class AbstractTypeTest extends \PHPUnit_Framework_TestCase
{
    /**
     * Returns the enum type
     *
     * @return string
     */
    abstract public function getType();

    /**
     * Returns an array of keys and values to test the enum type
     *
     * @return array
     */
    abstract public function typeProvider();

    /**
     * Tests the instantiation of an enum with keys and values
     *
     * @dataProvider typeProvider
     *
     * @param string $key   The enum key
     * @param string $value The enum value
     *
     * @return void
     */
    public function testType($key, $value)
    {
        $enumType = $this->getFqcn($this->getType());

        /** @var Enum $type */
        $type = new $enumType($value);

        $this->assertEquals($key, $type->getKey());
        $this->assertEquals($value, $type->getValue());
    }

    /**
     * Returns the fully-qualified class name of an enum
     *
     * @param string $typeClassName The class name of the enum
     *
     * @return string
     */
    private function getFqcn($typeClassName)
    {
        $fqcn = sprintf('CommunicatorCorp\Client\EnumerationType\%s', $typeClassName);

        if (!class_exists($fqcn)) {
            $this->fail(sprintf('%s not found.', $fqcn));
        }

        return $fqcn;
    }
}
