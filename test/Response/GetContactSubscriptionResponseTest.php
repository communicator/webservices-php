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

use CommunicatorCorp\Client\Response\GetContactSubscriptionResponse;

/**
 * Tests the `GetContactSubscriptionResponse`
 *
 * @package CommunicatorCorp\Client
 * @author  Daniel Morris <daniel@rippleffect.com>
 */
class GetContactSubscriptionResponseTest extends AbstractResponseTest
{
    /**
     * {@inheritDoc}
     *
     * @return GetContactSubscriptionResponse
     */
    public function getResponseObject()
    {
        return new GetContactSubscriptionResponse();
    }

    /**
     * {@inheritDoc}
     *
     * @return array
     */
    public function resultObjectPropertyProvider()
    {
        return [
            ['GetContactSubscriptionResult']
        ];
    }
}
