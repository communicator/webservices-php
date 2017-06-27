<?php

/*
 * CommunicatorCorp\Client
 *
 * Copyright © 2015 Rippleffect Studio Ltd
 * Rights reserved.
 *
 * PHP version 5.4+
 */

namespace CommunicatorCorp\Client\ObjectDefinition;

/**
 * Abstract object definition
 *
 * This provides a base `__call` and `__set` method for descendents.
 *
 * @package CommunicatorCorp\Client
 * @author  Daniel Morris <daniel@rippleffect.com>
 */
abstract class AbstractObjectDefinition implements ObjectDefinitionInterface
{
    /**
     * {@inheritDoc}
     *
     * @return array
     */
    abstract public function getMutableProperties();

    /**
     * {@inheritDoc}
     *
     * @return mixed
     */
    public function __call($method, array $arguments)
    {
        $beginningOfMethodName = substr($method, 0, 3);
        $property = substr($method, 3);

        if ('set' === $beginningOfMethodName && 1 !== count($arguments)) {
            throw new \InvalidArgumentException(sprintf('Setter accepts one argument only.'));
        }

        if ('set' === $beginningOfMethodName && in_array($property, $this->getMutableProperties())) {
            $this->$property = $arguments[0];
        } elseif ('get' === $beginningOfMethodName) {
            return isset($this->$property) ? $this->$property : null;
        }

        return $this;
    }

    /**
     * {@inheritDoc}
     *
     * @return void
     */
    public function __set($property, $value)
    {
        if (in_array($property, $this->getMutableProperties())) {
            $this->$property = $value;
        }
    }
}
