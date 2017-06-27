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

use CommunicatorCorp\Client\Response\UpdateContactSubscriptionsResponse;

/**
 * Tests the `UpdateContactSubscriptionsResponse` object
 *
 * @package CommunicatorCorp\Client
 * @author  Daniel Morris <daniel@rippleffect.com>
 */
class UpdateContactSubscriptionsResponseTest extends AbstractIterableResponseTest
{
    /**
     * {@inheritDoc}
     *
     * @return UpdateContactSubscriptionsResponse
     */
    public function getResponseObject()
    {
        return new UpdateContactSubscriptionsResponse();
    }

    /**
     * {@inheritDoc}
     *
     * @return array
     */
    public function resultObjectPropertyProvider()
    {
        return [
            ['UpdateContactSubscriptionsResult'],
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
            ['SubscriptionInfo'],
        ];
    }
}
