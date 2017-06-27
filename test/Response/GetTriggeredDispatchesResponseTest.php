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

use CommunicatorCorp\Client\Response\GetTriggeredDispatchesResponse;

/**
 * Tests the `GetTriggeredDispatchesResponse` object
 *
 * @package CommunicatorCorp\Client
 * @author  Daniel Morris <daniel@rippleffect.com>
 */
class GetTriggeredDispatchesResponseTest extends AbstractIterableResponseTest
{
    /**
     * {@inheritDoc}
     *
     * @return GetTriggeredDispatchesResponse
     */
    public function getResponseObject()
    {
        return new GetTriggeredDispatchesResponse();
    }

    /**
     * {@inheritDoc}
     *
     * @return array
     */
    public function resultObjectPropertyProvider()
    {
        return [
            ['GetTriggeredDispatchesResult'],
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
            ['Dispatch']
        ];
    }
}
