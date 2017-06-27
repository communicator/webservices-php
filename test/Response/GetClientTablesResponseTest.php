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

use CommunicatorCorp\Client\Response\GetClientTablesResponse;

/**
 * Tests the `GetClientTablesResponse` object
 *
 * @package CommunicatorCorp\Client\Test\Response
 * @author  Daniel Morris <daniel@rippleffect.com>
 */
class GetClientTablesResponseTest extends AbstractIterableResponseTest
{
    /**
     * {@inheritDoc}
     *
     * @return array
     */
    public function resultObjectPropertyProvider()
    {
        return [
            ['GetClientTablesResult']
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
            ['ClientTable']
        ];
    }

    /**
     * {@inheritDoc}
     *
     * @return GetClientTablesResponse
     */
    public function getResponseObject()
    {
        return new GetClientTablesResponse();
    }
}
