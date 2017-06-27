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

use CommunicatorCorp\Client\ObjectDefinition\EmailDispatch;

/**
 * Tests the `EmailDispatch` object definition
 *
 * @package CommunicatorCorp\Client
 * @author  Daniel Morris <daniel@rippleffect.com>
 */
class EmailDispatchTest extends \PHPUnit_Framework_TestCase
{
    /**
     * Tests the mutators and accessors on the `EmailDispatch` object definition
     *
     * @return void
     */
    public function testMutatorsAndAccessors()
    {
        $emailDispatch = new EmailDispatch();

        $emailDispatch->setId(1);
        $this->assertEquals(1, $emailDispatch->getId());

        $emailDispatch->setEmailId(2);
        $this->assertEquals(2, $emailDispatch->getEmailId());

        $emailDispatch->setMailingListId(3);
        $this->assertEquals(3, $emailDispatch->getMailingListId());

        $emailDispatch->setFilterId(4);
        $this->assertEquals(4, $emailDispatch->getFilterId());

        $emailDispatch->setFromName('Homer Simpson');
        $this->assertEquals('Homer Simpson', $emailDispatch->getFromName());

        $emailDispatch->setFromAddress('homer.simpson@springfield.gov');
        $this->assertEquals('homer.simpson@springfield.gov', $emailDispatch->getFromAddress());

        $emailDispatch->setSubjectLine('Subject');
        $this->assertEquals('Subject', $emailDispatch->getSubjectLine());

        $emailDispatch->setTrackHtmlLinks(true);
        $this->assertTrue($emailDispatch->getTrackHtmlLinks());

        $emailDispatch->setTrackPlainLinks(true);
        $this->assertTrue($emailDispatch->getTrackPlainLinks());

        $emailDispatch->setEnableConversionTracking(true);
        $this->assertTrue($emailDispatch->getEnableConversionTracking());

        $emailDispatch->setEnableAnalytics(true);
        $this->assertTrue($emailDispatch->getEnableAnalytics());

        $emailDispatch->setReplyForwardingAddress('homer.simpson@springfield.usa');
        $this->assertEquals('homer.simpson@springfield.usa', $emailDispatch->getReplyForwardingAddress());

        $emailDispatch->setStatus('Processing');
        $this->assertEquals('Processing', $emailDispatch->getStatus());

        $emailDispatch->setIndicatedListSize(5);
        $this->assertEquals(5, $emailDispatch->getIndicatedListSize());

        $emailDispatch->setTotalProcessed(6);
        $this->assertEquals(6, $emailDispatch->getTotalProcessed());

        $emailDispatch->setTotalSuccess(7);
        $this->assertEquals(7, $emailDispatch->getTotalSuccess());

        $emailDispatch->setTotalFailed(8);
        $this->assertEquals(8, $emailDispatch->getTotalFailed());

        $emailDispatch->setScheduledDate('2015-04-20 16:20:00');
        $this->assertEquals('2015-04-20 16:20:00', $emailDispatch->getScheduledDate());

        $emailDispatch->setTimeZone('Europe/London');
        $this->assertEquals('Europe/London', $emailDispatch->getTimeZone());

        $emailDispatch->setDateStarted('2015-04-20 16:20:01');
        $this->assertEquals('2015-04-20 16:20:01', $emailDispatch->getDateStarted());

        $emailDispatch->setDateCompleted('2015-04-20 16:20:02');
        $this->assertEquals('2015-04-20 16:20:02', $emailDispatch->getDateCompleted());

        $emailDispatch->setCreatedBy('Marge Simpson');
        $this->assertEquals('Marge Simpson', $emailDispatch->getCreatedBy());

        $emailDispatch->setDateCreated('2015-04-20 16:20:03');
        $this->assertEquals('2015-04-20 16:20:03', $emailDispatch->getDateCreated());

        $emailDispatch->setLastAuthorisedBy('Lisa Simpson');
        $this->assertEquals('Lisa Simpson', $emailDispatch->getLastAuthorisedBy());

        $emailDispatch->setLastAuthorisedDate('2015-04-20 16:20:04');
        $this->assertEquals('2015-04-20 16:20:04', $emailDispatch->getLastAuthorisedDate());

        $emailDispatch->setIsTriggeredDispatch(true);
        $this->assertTrue($emailDispatch->getIsTriggeredDispatch());
    }
}
