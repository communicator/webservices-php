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

use CommunicatorCorp\Client\ObjectDefinition\FromAddress;

/**
 * Tests the `FromAddress` object definition
 *
 * @package CommunicatorCorp\Client
 * @author  Daniel Morris <daniel@rippleffect.com>
 */
class FromAddressTest extends \PHPUnit_Framework_TestCase
{
    /**
     * Tests the mutators and accessors on the `FromAddress` object definition
     *
     * @return void
     */
    public function testMutatorsAndAccessors()
    {
        $fromAddress = new FromAddress();

        $fromAddress->setId(1);
        $this->assertEquals(1, $fromAddress->getId());

        $fromAddress->setDescription('From description.');
        $this->assertEquals('From description.', $fromAddress->getDescription());

        $fromAddress->setEmailAddress('test@test.com');
        $this->assertEquals('test@test.com', $fromAddress->getEmailAddress());
    }
}
