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

use CommunicatorCorp\Client\Response\UpdateContactSubscriptionResponse;

/**
 * Tests the `UpdateContactSubscriptionResponse` object
 *
 * @package CommunicatorCorp\Client
 * @author  Daniel Morris <daniel@rippleffect.com>
 */
class UpdateContactSubscriptionResponseTest extends AbstractResponseTest
{
    /**
     * {@inheritDoc}
     *
     * @return UpdateMailingListResponse
     */
    public function getResponseObject()
    {
        return new UpdateContactSubscriptionResponse();
    }

    /**
     * {@inheritDoc}
     *
     * @return array
     */
    public function resultObjectPropertyProvider()
    {
        return [
            ['UpdateContactSubscriptionResult'],
        ];
    }
}
