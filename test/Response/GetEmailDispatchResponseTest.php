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

use CommunicatorCorp\Client\Response\GetEmailDispatchResponse;

/**
 * Tests the `GetEmailDispatchResponse`
 *
 * @package CommunicatorCorp\Client\Test\Response
 * @author  Daniel Morris <daniel@rippleffect.com>
 */
class GetEmailDispatchResponseTest extends AbstractResponseTest
{
    /**
     * {@inheritDoc}
     *
     * @return GetEmailDispatchResponse
     */
    public function getResponseObject()
    {
        return new GetEmailDispatchResponse();
    }

    /**
     * {@inheritDoc}
     *
     * @return array
     */
    public function resultObjectPropertyProvider()
    {
        return [
            ['GetEmailDispatchResult']
        ];
    }
}
