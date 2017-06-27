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
 * Factory for enumeration objects
 *
 * @package CommunicatorCorp\Client
 * @author  Daniel Morris <daniel@rippleffect.com>
 */
class EnumerationTypeFactory implements EnumerationTypeFactoryInterface
{
    /**
     * {@inheritDoc}
     *
     * @return Enum
     */
    public function factory($enumName, $value)
    {
        $fqcn = $this->getFqcn($enumName);

        return new $fqcn($value);
    }

    /**
     * Returns the fully-qualified class name for an enumeration object
     *
     * @param string $enumName The name of the enumeration object
     *
     * @return string
     */
    private function getFqcn($enumName)
    {
        $fqcn = sprintf('CommunicatorCorp\Client\EnumerationType\%s', $enumName);

        if (!class_exists($fqcn)) {
            throw new \InvalidArgumentException();
        }

        return $fqcn;
    }
}
