<?php

/*
 * CommunicatorCorp\Client
 *
 * Copyright © 2015 Rippleffect Studio Ltd
 * Rights reserved.
 */

namespace CommunicatorCorp\Client\Test\ObjectDefinition;

use CommunicatorCorp\Client\ObjectDefinition\EmailDispatchOpenStatistics;

/**
 * Tests the `EmailDispatchOpenStatistics` object definition.
 *
 * @package CommunicatorCorp\Client
 * @author  Daniel Morris <daniel@rippleffect.com>
 */
class EmailDispatchOpenStatisticsTest extends \PHPUnit_Framework_TestCase
{
    /**
     * Tests the mutators and accessors on the `EmailDispatchOpenStatistics` object definition.
     *
     * @return void
     */
    public function testMutatorsAndAccessors()
    {
        $emailDispatchOpenStatistics = new EmailDispatchOpenStatistics();

        $emailDispatchOpenStatistics
            ->setAverageOpensPerRecipient(1.5)
            ->setTotalClicks(4)
            ->setTotalRegularClicks(3)
            ->setTotalUniqueClicks(2)
            ->setTotalUnsubscribeClicks(1)
            ->setTotalWebViewClicks(0)
        ;

        $this->assertEquals(1.5, $emailDispatchOpenStatistics->getAverageOpensPerRecipient());
        $this->assertEquals(4, $emailDispatchOpenStatistics->getTotalClicks());
        $this->assertEquals(3, $emailDispatchOpenStatistics->getTotalRegularClicks());
        $this->assertEquals(2, $emailDispatchOpenStatistics->getTotalUniqueClicks());
        $this->assertEquals(1, $emailDispatchOpenStatistics->getTotalUnsubscribeClicks());
        $this->assertEquals(0, $emailDispatchOpenStatistics->getTotalWebViewClicks());
    }
}
