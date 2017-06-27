<?php

/*
 * CommunicatorCorp\Client
 *
 * Copyright © 2015 Rippleffect Studio Ltd
 * Rights reserved.
 */

namespace CommunicatorCorp\Client\Test\ObjectDefinition;

use CommunicatorCorp\Client\EnumerationType\MailingType;
use CommunicatorCorp\Client\ObjectDefinition\DispatchDetails;

/**
 * Tests the `DispatchDetails` object definition.
 *
 * @package Communicator\Client
 * @author  Daniel Morris <daniel@rippleffect.com>
 */
class DispatchDetailsTest extends \PHPUnit_Framework_TestCase
{
    /**
     * Tests the mutators and accessors on the `DispatchDetails` object definition.
     *
     * The `DispatchDetails` object definition inherits from `Dispatch`, so we test
     * the magic setters and getters on both objects.
     *
     * @return void
     */
    public function testMutatorsAndAccessors()
    {
        $mailingType = new MailingType(MailingType::EMAIL);

        $dispatchDetails = new DispatchDetails();

        $dispatchDetails
            ->setId(1)
            ->setMailingType($mailingType)
            ->setStatus('Dispatching')
            ->setDateScheduled('2016-01-01 00:00:00')
            ->setListSize(10)
            ->setTotalSuccess(5)
            ->setTotalFailed(2)
            ->setTotalExcluded(3)
            ->setIsTest(true)
            ->setMailingListId(4)
            ->setMailingListFilterId(6)
            ->setFromName('Homer Simpson')
            ->setTimeZoneName('UTC')
            ->setIsTriggeredDispatch(true)
        ;

        $this->assertEquals(1, $dispatchDetails->getId());
        $this->assertEquals('Email', $dispatchDetails->getMailingType());
        $this->assertEquals('Dispatching', $dispatchDetails->getStatus());
        $this->assertEquals('2016-01-01 00:00:00', $dispatchDetails->getDateScheduled());
        $this->assertEquals(10, $dispatchDetails->getListSize());
        $this->assertEquals(5, $dispatchDetails->getTotalSuccess());
        $this->assertEquals(2, $dispatchDetails->getTotalFailed());
        $this->assertEquals(3, $dispatchDetails->getTotalExcluded());
        $this->assertTrue($dispatchDetails->getIsTest());
        $this->assertEquals(4, $dispatchDetails->getMailingListId());
        $this->assertEquals(6, $dispatchDetails->getMailingListFilterId());
        $this->assertEquals('Homer Simpson', $dispatchDetails->getFromName());
        $this->assertEquals('UTC', $dispatchDetails->getTimeZoneName());
        $this->assertTrue($dispatchDetails->getIsTriggeredDispatch());
    }
}
