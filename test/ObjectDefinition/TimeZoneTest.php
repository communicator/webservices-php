<?php

/*
 * CommunicatorCorp\Client
 *
 * Copyright © 2015 Rippleffect Studio Ltd
 * Rights reserved.
 */

namespace CommunicatorCorp\Client\Test\ObjectDefinition;

use CommunicatorCorp\Client\ObjectDefinition\TimeZone;

/**
 * Tests the `TimeZone` object definition.
 *
 * @package CommunicatorCorp\Client\Test
 * @author  Daniel Morris <daniel@rippleffect.com>
 */
class TimeZoneTest extends \PHPUnit_Framework_TestCase
{
    /**
     * Tests the mutators and accessors on the `TimeZone` object definition.
     *
     * @return void
     */
    public function testMutatorsAndAccessors()
    {
        $timeZone = new TimeZone();

        $timeZone
            ->setName('Name.')
            ->setDescription('Description.')
        ;

        $this->assertEquals('Name.', $timeZone->getName());
        $this->assertEquals('Description.', $timeZone->getDescription());
    }
}
