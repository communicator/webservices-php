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

use CommunicatorCorp\Client\Response\GetClientTableResponse;

/**
 * Tests the `GetClientTableResponse`
 *
 * @package CommunicatorCorp\Client\Test\Response
 * @author  Daniel Morris <daniel@rippleffect.com>
 */
class GetClientTableResponseTest extends AbstractResponseTest
{
    /**
     * {@inheritDoc}
     *
     * @return GetClientTableResponse
     */
    public function getResponseObject()
    {
        return new GetClientTableResponse();
    }

    /**
     * {@inheritDoc}
     *
     * @return array
     */
    public function resultObjectPropertyProvider()
    {
        return [
            ['GetClientTableResult']
        ];
    }
}
