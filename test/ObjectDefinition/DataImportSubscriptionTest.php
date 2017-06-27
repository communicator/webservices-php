<?php

/*
 * CommunicatorCorp\Client
 *
 * Copyright © 2015 Rippleffect Studio Ltd
 * Rights reserved.
 */

namespace CommunicatorCorp\Client\Test\ObjectDefinition;

use CommunicatorCorp\Client\EnumerationType\SubscriptionUpdateMethod;
use CommunicatorCorp\Client\ObjectDefinition\DataImportSubscription;

/**
 * Tests the `DataImportSubscription` object definition.
 *
 * @package CommunicatorCorp\Client
 * @author  Daniel Morris <daniel@rippleffect.com>
 */
class DataImportSubscriptionTest extends \PHPUnit_Framework_TestCase
{
    /**
     * Tests the mutators and accessors on the `DataImportSubscription` object definition.
     *
     * @return void
     */
    public function testMutatorsAndAccessors()
    {
        $subscriptionUpdateMethod = new SubscriptionUpdateMethod(
            SubscriptionUpdateMethod::HONOUR_EXISTING_UNSUBSCRIBES
        );

        $dataImportSubscription = new DataImportSubscription();

        $dataImportSubscription
            ->setMailingListId(1)
            ->setSubscriptionMethod($subscriptionUpdateMethod)
        ;

        $this->assertEquals(1, $dataImportSubscription->getMailingListId());
        $this->assertEquals('HonourExistingUnsubscribes', $dataImportSubscription->getSubscriptionMethod());
    }
}
