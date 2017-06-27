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
 * Interface for object definitions
 *
 * @package CommunicatorCorp\Client
 * @author  Daniel Morris <daniel@rippleffect.com>
 */
interface ObjectDefinitionInterface
{
    /**
     * Called when a non-existent instance method is called
     *
     * This will determine whether there is a mutable property that can either
     * be mutated or accessed and will respond accordingly. Setters will return
     * an instance of self, and getters will return the contained value of the
     * accessed property.
     *
     * @param string $method    The method name
     * @param array  $arguments The method arguments
     *
     * @return mixed
     */
    public function __call($method, array $arguments);

    /**
     * Sets the value of a property on the object definition
     *
     * This method should determine whether the property is mutable by checking
     * whether the property name is returned from `getMutableProperties`.
     *
     * @param string $property The property name
     * @param mixed  $value    The property value
     *
     * @return void
     */
    public function __set($property, $value);

    /**
     * Returns the mutable properties within an object definition
     *
     * The `__call` and `__set` methods should defer to this method before
     * modifying the value of a property.
     *
     * @return array
     */
    public function getMutableProperties();
}
