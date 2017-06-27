<?php

/*
 * CommunicatorCorp\Communicator
 *
 * Copyright © 2015 Rippleffect Studio Ltd
 * Rights reserved.
 */

namespace CommunicatorCorp\Client\Test\Response;

use CommunicatorCorp\Client\Response\GetTriggerDispatchesResponse;

/**
 * Tests the `GetTriggerDispatchesResponse` object
 *
 * @package CommunicatorCorp\Client\Test
 * @author  Daniel Morris <daniel@rippleffect.com>
 */
class GetTriggerDispatchesResponseTest extends AbstractIterableResponseTest
{
    /**
     * {@inheritDoc}
     *
     * @return GetTriggerDispatchesResponse
     */
    public function getResponseObject()
    {
        return new GetTriggerDispatchesResponse();
    }

    /**
     * {@inheritDoc}
     *
     * @return array
     */
    public function resultObjectPropertyProvider()
    {
        return [
            ['GetTriggerDispatchesResult'],
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
            ['EmailDispatch'],
        ];
    }
}
