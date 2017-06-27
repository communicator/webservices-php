<?php

/*
 * CommunicatorCorp\Client
 *
 * Copyright © 2015 Rippleffect Studio Ltd
 * Rights reserved.
 */

namespace CommunicatorCorp\Client\Test\EnumerationType;

/**
 * Tests the subscription update method enumeration object.
 *
 * @package CommunicatorCorp\Client
 * @author  Daniel Morris <daniel@rippleffect.com>
 */
class SubscriptionUpdateMethodTest extends AbstractTypeTest
{
    /**
     * {@inheritDoc}
     *
     * @return string
     */
    public function getType()
    {
        return 'SubscriptionUpdateMethod';
    }

    /**
     * {@inheritDoc}
     *
     * @return array
     */
    public function typeProvider()
    {
        return [
            ['SUBSCRIBE_ALL', 'SubscribeAll'],
            ['UNSUBSCRIBE_ALL', 'UnsubscribeAll'],
            ['HONOUR_EXISTING_UNSUBSCRIBES', 'HonourExistingUnsubscribes'],
        ];
    }
}
