<?php

/*
 * CommunicatorCorp\Client
 *
 * Copyright © 2015 Rippleffect Studio Ltd
 * Rights reserved.
 */

namespace CommunicatorCorp\Client\Test\ObjectDefinition;

use CommunicatorCorp\Client\ObjectDefinition\EmailDispatchBounceStatistics;

/**
 * Tests the `EmailDispatchBounceStatistics` object definition.
 *
 * @package CommunicatorCorp\Client\Test
 * @author  Daniel Morris <daniel@rippleffect.com>
 */
class EmailDispatchBounceStatisticsTest extends \PHPUnit_Framework_TestCase
{
    /**
     * Tests the mutators and accessors on the `EmailDispatchBounceStatistics` object definition.
     *
     * @return void
     */
    public function testMutatorsAndAccessors()
    {
        $emailDispatchBounceStatistics = new EmailDispatchBounceStatistics();

        $emailDispatchBounceStatistics
            ->setTotalBounces(5)
            ->setTotalContentReputationBounces(4)
            ->setTotalHardBounces(3)
            ->setTotalSoftBounces(2)
        ;

        $this->assertEquals(5, $emailDispatchBounceStatistics->getTotalBounces());
        $this->assertEquals(4, $emailDispatchBounceStatistics->getTotalContentReputationBounces());
        $this->assertEquals(3, $emailDispatchBounceStatistics->getTotalHardBounces());
        $this->assertEquals(2, $emailDispatchBounceStatistics->getTotalSoftBounces());
    }
}
