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

use CommunicatorCorp\Client\Response\GetEmailListResponse;

/**
 * Tests the `GetEmailListResponse`
 *
 * @package CommunicatorCorp\Client\Test\Response
 * @author  Daniel Morris <daniel@rippleffect.com>
 */
class GetEmailListResponseTest extends AbstractResponseTest
{
    /**
     * {@inheritDoc}
     *
     * @return GetEmailListResponse
     */
    public function getResponseObject()
    {
        return new GetEmailListResponse();
    }

    /**
     * {@inheritDoc}
     *
     * @return array
     */
    public function resultObjectPropertyProvider()
    {
        return [
            ['GetEmailListResult']
        ];
    }
}
