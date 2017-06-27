<?php

/*
 * CommunicatorCorp\Client
 *
 * Copyright © 2015 Rippleffect Studio Ltd
 * Rights reserved.
 *
 * PHP version 5.4+
 */

namespace CommunicatorCorp\Client\Test\ObjectDefinition;

use CommunicatorCorp\Client\ObjectDefinition\CommunicatorCredentials;

/**
 * Tests the `CommunicatorCredentials` class
 *
 * @package CommunicatorCorp\Client
 * @author  Daniel Morris <daniel@rippleffect.com>
 * @see     CommunicatorCorp\Client\ValueObject\CommunicatorCredentials
 */
class CommunicatorCredentialsTest extends \PHPUnit_Framework_TestCase
{
    /**
     * Tests the accessors of the `CommunicatorCredentials` class
     *
     * @return void
     */
    public function testAccessors()
    {
        $communicatorCredentials = new CommunicatorCredentials(
            'homer.simpson',
            'donuts'
        );

        $this->assertEquals('homer.simpson', $communicatorCredentials->getUsername());
        $this->assertEquals('donuts', $communicatorCredentials->getPassword());
    }
}
