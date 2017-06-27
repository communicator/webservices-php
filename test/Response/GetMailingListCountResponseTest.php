<?php

/**
 * CommunicatorCorp\Client
 *
 * Copyright © 2015 Rippleffect Studio Ltd
 * Rights reserved.
 *
 * PHP version 5.4+
 */

namespace CommunicatorCorp\Client\Test\Response;

use CommunicatorCorp\Client\Response\GetMailingListCountResponse;

/**
 * Tests the `GetMailingListCountResponse` response object
 *
 * @package CommunicatorCorp\Client
 * @author  Daniel Morris <daniel@rippleffect.com>
 */
class GetMailingListCountResponseTest extends AbstractResponseTest
{
    /**
     * {@inheritDoc}
     *
     * @return GetMailingListCountResponse
     */
    public function getResponseObject()
    {
        return new GetMailingListCountResponse();
    }

    /**
     * {@inheritDoc}
     *
     * @return array
     */
    public function resultObjectPropertyProvider()
    {
        return [
            ['GetMailingListCountResult'],
        ];
    }
}
