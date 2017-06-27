<?php

/*
 * CommunicatorCorp\Client
 *
 * Copyright © 2015 Rippleffect Studio Ltd
 * Rights reserved.
 *
 * PHP version 5.4+
 */

namespace CommunicatorCorp\Client\Test\Response;

use CommunicatorCorp\Client\Response\AbstractIterableResponse;

/**
 * Tests the abstract iterable response
 *
 * @package CommunicatorCorp\Client
 * @author  Daniel Morris <daniel@rippleffect.com>
 */
abstract class AbstractIterableResponseTest extends \PHPUnit_Framework_TestCase
{
    /**
     * Returns the name of the result object
     *
     * @return mixed
     */
    abstract public function resultObjectPropertyProvider();

    /**
     * Returns the name of the object definition
     *
     * @return string
     */
    abstract public function objectDefinitionPropertyProvider();

    /**
     * Returns the response object
     *
     * @return string
     */
    abstract public function getResponseObject();

    /**
     * Tests the result object property
     *
     * @dataProvider resultObjectPropertyProvider
     *
     * @param string $resultObjectProperty The name of the result object property
     *
     * @return void
     */
    public function testResultObjectProperty($resultObjectProperty)
    {
        /** @var AbstractIterableResponse $responseObject */
        $responseObject = $this->getResponseObject();

        $this->assertEquals($resultObjectProperty, $responseObject->getResultObjectProperty());
    }

    /**
     * Tests the object definition property
     *
     * @dataProvider objectDefinitionPropertyProvider
     *
     * @param string $objectDefinitionProperty The name of the object definition property
     *
     * @return void
     */
    public function testObjectDefinitionProperty($objectDefinitionProperty)
    {
        /** @var AbstractIterableResponse $responseObject */
        $responseObject = $this->getResponseObject();

        $this->assertEquals($objectDefinitionProperty, $responseObject->getObjectDefinitionProperty());
    }

    /**
     * Tests that response objects are instantiated with the key at zero
     *
     * @return void
     */
    public function testKey()
    {
        /** @var AbstractIterableResponse $responseObject */
        $responseObject = $this->getResponseObject();

        $this->assertEquals(0, $responseObject->key());
    }

    /**
     * Tests that response object keys can be incremented
     *
     * @return void
     */
    public function testNext()
    {
        /** @var AbstractIterableResponse $responseObject */
        $responseObject = $this->getResponseObject();
        $responseObject->next();

        $this->assertEquals(1, $responseObject->key());
    }

    /**
     * Tests that response object keys can be rewound
     *
     * @return void
     */
    public function testRewind()
    {
        /** @var AbstractIterableResponse $responseObject */
        $responseObject = $this->getResponseObject();
        $responseObject->next();
        $responseObject->rewind();

        $this->assertEquals(0, $responseObject->key());
    }

    /**
     * Tests that response objects can return the current element
     *
     * @return void
     */
    public function testCurrent()
    {
        /** @var AbstractIterableResponse $responseObject */
        $responseObject = $this->getResponseObject();
        $objectDefinition = sprintf(
            'CommunicatorCorp\Client\ObjectDefinition\%s',
            $responseObject->getObjectDefinitionProperty()
        );

        $responseObject->{$responseObject->getResultObjectProperty()} = new \stdClass();

        $responseObject
            ->{$responseObject->getResultObjectProperty()}
            ->{$responseObject->getObjectDefinitionProperty()} = [new $objectDefinition];

        $this->assertTrue($responseObject->valid());
        $this->assertInstanceOf($objectDefinition, $responseObject->current());
    }

    /**
     * Tests that response objects are not valid when created
     *
     * @return void
     */
    public function testInvalidWhenInstantiated()
    {
        /** @var AbstractIterableResponse $responseObject */
        $responseObject = $this->getResponseObject();

        $this->assertFalse($responseObject->valid());
    }
}
