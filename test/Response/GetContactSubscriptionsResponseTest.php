<?php

/*
 * CommunicatorCorp\Client
 *
 * Copyright © 2015 Rippleffect Studio Ltd
 * Rights reserved.
 *
 * PHP version 5.4+
 */

namespace CommunicatorCorp\Client\Test\Response;

use CommunicatorCorp\Client\Response\GetContactSubscriptionsResponse;

/**
 * Tests the `GetContactSubscriptionsResponse`
 *
 * @package CommunicatorCorp\Client
 * @author  Daniel Morris <daniel@rippleffect.com>
 */
class GetContactSubscriptionsResponseTest extends AbstractIterableResponseTest
{
    /**
     * {@inheritDoc}
     *
     * @return array
     */
    public function resultObjectPropertyProvider()
    {
        return [
            ['GetContactSubscriptionsResult']
        ];
    }

    /**
     * {@inheritDoc}
     *
     * @return array
     */
    public function objectDefinitionPropertyProvider()
    {
        return [
            ['SubscriptionInfo']
        ];
    }

    /**
     * {@inheritDoc}
     *
     * @return GetContactSubscriptionsResponse
     */
    public function getResponseObject()
    {
        return new GetContactSubscriptionsResponse();
    }
}
