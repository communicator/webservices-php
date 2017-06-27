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

use CommunicatorCorp\Client\Response\AbstractResponse;

/**
 * Tests the abstract response
 *
 * @package CommunicatorCorp\Client
 * @author  Daniel Morris <daniel@rippleffect.com>
 */
abstract class AbstractResponseTest extends \PHPUnit_Framework_TestCase
{
    /**
     * Returns the name of the result object
     *
     * @return array
     */
    abstract public function resultObjectPropertyProvider();

    /**
     * Returns the response object
     *
     * @return AbstractResponse
     */
    abstract public function getResponseObject();

    /**
     * Tests the result object property
     *
     * @dataProvider resultObjectPropertyProvider
     *
     * @param string $resultObjectProperty The result object property name
     *
     * @return void
     */
    public function testResultObjectProperty($resultObjectProperty)
    {
        /** @var AbstractResponse $responseObject */
        $responseObject = $this->getResponseObject();

        $this->assertEquals($resultObjectProperty, $responseObject->getResultObjectProperty());
    }
}
