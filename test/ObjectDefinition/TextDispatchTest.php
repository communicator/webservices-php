<?php

/*
 * Communicator\Client
 *
 * Copyright © 2015 Rippleffect Studio Ltd
 * Rights reserved.
 */

namespace CommunicatorCorp\Client\Test\ObjectDefinition;

use CommunicatorCorp\Client\EnumerationType\MailingType;
use CommunicatorCorp\Client\ObjectDefinition\TextDispatch;

/**
 * Tests the `TextDispatch` object definition.
 *
 * @package CommunicatorCorp\Client\Test
 * @author  Daniel Morris <daniel@rippleffect.com>
 */
class TextDispatchTest extends \PHPUnit_Framework_TestCase
{
    /**
     * Tests the mutators and accessors on the `TextDispatch` object definition.
     *
     * @return void
     */
    public function testMutatorsAndAccessors()
    {
        $mailingType = new MailingType(MailingType::EMAIL);

        $textDispatch = new TextDispatch();

        $textDispatch
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
            ->setTextMessageId(15)
            ->setMaximumPagesPerRecipient(100)
            ->setAllowSpecialCharacters(true)
        ;

        $this->assertEquals(1, $textDispatch->getId());
        $this->assertEquals('Email', $textDispatch->getMailingType());
        $this->assertEquals('Dispatching', $textDispatch->getStatus());
        $this->assertEquals('2016-01-01 00:00:00', $textDispatch->getDateScheduled());
        $this->assertEquals(10, $textDispatch->getListSize());
        $this->assertEquals(5, $textDispatch->getTotalSuccess());
        $this->assertEquals(2, $textDispatch->getTotalFailed());
        $this->assertEquals(3, $textDispatch->getTotalExcluded());
        $this->assertTrue($textDispatch->getIsTest());
        $this->assertEquals(4, $textDispatch->getMailingListId());
        $this->assertEquals(6, $textDispatch->getMailingListFilterId());
        $this->assertEquals('Homer Simpson', $textDispatch->getFromName());
        $this->assertEquals('UTC', $textDispatch->getTimeZoneName());
        $this->assertTrue($textDispatch->getIsTriggeredDispatch());
        $this->assertEquals(15, $textDispatch->getTextMessageId());
        $this->assertEquals(100, $textDispatch->getMaximumPagesPerRecipient());
        $this->assertTrue($textDispatch->getAllowSpecialCharacters());
    }
}
