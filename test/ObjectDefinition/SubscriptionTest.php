<?php

/*
 * CommunicatorCorp\Client
 *
 * Copyright © 2015 Rippleffect Studio Ltd
 * Rights reserved.
 */

namespace CommunicatorCorp\Client\Test\ObjectDefinition;

use CommunicatorCorp\Client\ObjectDefinition\Subscription;

/**
 * Tests the `Subscription` object definition.
 *
 * @package CommunicatorCorp\Client
 * @author  Daniel Morris <daniel@rippleffect.com>
 */
class SubscriptionTest extends \PHPUnit_Framework_TestCase
{
    /**
     * Tests the mutators and accessors on the `Subscription` object definition.
     *
     * @return void
     */
    public function testMutatorsAndAccessors()
    {
        $subscription = new Subscription();

        $subscription->setMailingListId(1);
        $this->assertEquals(1, $subscription->getMailingListId());

        $subscription->setSubscribed(true);
        $this->assertTrue($subscription->getSubscribed());

        $subscription->setHonourExistingUnsubscribes(true);
        $this->assertTrue($subscription->getHonourExistingUnsubscribes());
    }
}
