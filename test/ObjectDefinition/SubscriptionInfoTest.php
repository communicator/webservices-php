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

use CommunicatorCorp\Client\ObjectDefinition\SubscriptionInfo;

/**
 * Tests the `SubscriptionInfo` object definition
 *
 * @package CommunicatorCorp\Client
 * @author  Daniel Morris <daniel@rippleffect.com>
 */
class SubscriptionInfoTest extends \PHPUnit_Framework_TestCase
{
    /**
     * Tests the mutators and accessors on the `SubscriptionInfo` object definition
     *
     * @return void
     */
    public function testMutatorsAndAccessors()
    {
        $subscriptionInfo = new SubscriptionInfo();

        $subscriptionInfo->setMailingListId(1);
        $this->assertEquals(1, $subscriptionInfo->getMailingListId());

        $subscriptionInfo->setIsSubscribed(true);
        $this->assertTrue($subscriptionInfo->getIsSubscribed());

        $subscriptionInfo->setDateLastAction(new \DateTime());
        $this->assertInstanceOf('\DateTime', $subscriptionInfo->getDateLastAction());

        $subscriptionInfo->setSubscriptionSourceType('TestCase');
        $this->assertEquals('TestCase', $subscriptionInfo->getSubscriptionSourceType());
    }

    /**
     * Tests that a non-mutable property does not set a value and fails silently
     *
     * @return void
     */
    public function testUnknownMutator()
    {
        $subscriptionInfo = new SubscriptionInfo();

        $subscriptionInfo->setNonExistentProperty(1);
        $this->assertNull($subscriptionInfo->getNonExistentProperty());
    }
}
