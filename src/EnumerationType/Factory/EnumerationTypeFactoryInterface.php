<?php

/*
 * CommunicatorCorp\Client
 *
 * Copyright © 2015 Rippleffect Studio Ltd
 * Rights reserved.
 *
 * PHP version 5.4+
 */

namespace CommunicatorCorp\Client\EnumerationType\Factory;

use MyCLabs\Enum\Enum;

/**
 * Interface for an enumeration object factory
 *
 * @package CommunicatorCorp\Client
 * @author  Daniel Morris <daniel@rippleffect.com>s
 */
interface EnumerationTypeFactoryInterface
{
    /**
     * Returns an enumeration object
     *
     * Returns an enumeration object initialised with a value, the value is
     * passed to the enumeration object constructor and is checked whether
     * it is a valid value based on the constants within the object.
     *
     * @param string $enumName The name of the enumeration object
     * @param mixed  $value    The value of the enumeration object
     *
     * @return Enum
     */
    public function factory($enumName, $value);
}
