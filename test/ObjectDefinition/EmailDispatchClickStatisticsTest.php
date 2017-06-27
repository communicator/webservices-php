<?php

/*
 * CommunicatorCorp\Communicator
 *
 * Copyright © 2015 Rippleffect Studio Ltd
 * Rights reserved.
 */

namespace CommunicatorCorp\Client\Test\EnumerationType;

use CommunicatorCorp\Client\ObjectDefinition\EmailDispatchClickStatistics;

/**
 * Tests the `EmailDispatchClickStatistics` object definition.
 *
 * @package CommunicatorCorp\Client\Test
 * @author  Daniel Morris <daniel@rippleffect.com>
 */
class EmailDispatchClickStatisticTest extends \PHPUnit_Framework_TestCase
{
    /**
     * Tests the mutators and accessors on the `EmailDispatchClickStatistics` object definition.
     *
     * @return void
     */
    public function testMutatorsAndAccessors()
    {
        $emailDispatchClickStatistics = new EmailDispatchClickStatistics();

        $emailDispatchClickStatistics
            ->setAverageClicksPerOpener(1.5)
            ->setTotalClicks(15)
            ->setTotalRegularClicks(10)
            ->setTotalUniqueClicks(20)
            ->setTotalUnsubscribeClicks(2)
            ->setTotalWebViewClicks(5)
        ;

        $this->assertEquals(1.5, $emailDispatchClickStatistics->getAverageClicksPerOpener());
        $this->assertEquals(15, $emailDispatchClickStatistics->getTotalClicks());
        $this->assertEquals(10, $emailDispatchClickStatistics->getTotalRegularClicks());
        $this->assertEquals(20, $emailDispatchClickStatistics->getTotalUniqueClicks());
        $this->assertEquals(2, $emailDispatchClickStatistics->getTotalUnsubscribeClicks());
        $this->assertEquals(5, $emailDispatchClickStatistics->getTotalWebViewClicks());
    }
}
