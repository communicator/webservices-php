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

use CommunicatorCorp\Client\Response\GetMailingListResponse;

/**
 * Tests the `GetMailingListResponse` object
 *
 * @package CommunicatorCorp\Client
 * @author  Daniel Morris <daniel@rippleffect.com>
 */
class GetMailingListResponseTest extends AbstractResponseTest
{
    /**
     * {@inheritDoc}
     *
     * @return GetMailingListResponse
     */
    public function getResponseObject()
    {
        return new GetMailingListResponse();
    }

    /**
     * {@inheritDoc}
     *
     * @return array
     */
    public function resultObjectPropertyProvider()
    {
        return [
            ['GetMailingListResult'],
        ];
    }
}
