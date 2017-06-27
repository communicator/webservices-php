<?php

/*
 * CommunicatorCorp\Client
 *
 * Copyright © 2015 Rippleffect Studio Ltd
 * Rights reserved.
 */

namespace CommunicatorCorp\Client\Test\ObjectDefinition;

use CommunicatorCorp\Client\ObjectDefinition\EmailDispatchUnsubscribeStatistics;

/**
 * Tests the `EmailDispatchUnsubscribeStatistics` object definition.
 *
 * @package CommunicatorCorp\Client\Test
 * @author  Daniel Morris <daniel@rippleffect.com>
 */
class EmailDispatchUnsubscribeStatisticsTest extends \PHPUnit_Framework_TestCase
{
    /**
     * Tests the mutators and accessors on the `EmailDispatchUnsubscribeStatistics` object definition.
     *
     * @return void
     */
    public function testMutatorsAndAccessors()
    {
        $emailDispatchUnsubscribeStatistics = new EmailDispatchUnsubscribeStatistics();

        $emailDispatchUnsubscribeStatistics
            ->setTotalClickUnsubscribes(1.5)
            ->setTotalFeedbackLoopUnsubscribes(10)
            ->setTotalListUnsubscribeUnsubscribes(5)
            ->setTotalReplyUnsubscribes(3)
            ->setTotalUnsubscribes(19)
            ->setTotalDCFUnsubscribes(1)
        ;

        $this->assertEquals(1.5, $emailDispatchUnsubscribeStatistics->getTotalClickUnsubscribes());
        $this->assertEquals(10, $emailDispatchUnsubscribeStatistics->getTotalFeedbackLoopUnsubscribes());
        $this->assertEquals(5, $emailDispatchUnsubscribeStatistics->getTotalListUnsubscribeUnsubscribes());
        $this->assertEquals(3, $emailDispatchUnsubscribeStatistics->getTotalReplyUnsubscribes());
        $this->assertEquals(19, $emailDispatchUnsubscribeStatistics->getTotalUnsubscribes());
        $this->assertEquals(1, $emailDispatchUnsubscribeStatistics->getTotalDCFUnsubscribes());
    }
}
