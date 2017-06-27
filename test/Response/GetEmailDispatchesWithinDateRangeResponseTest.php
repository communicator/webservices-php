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

use CommunicatorCorp\Client\Response\GetEmailDispatchesWithinDateRangeResponse;

/**
 * Tests the `GetEmailDispatchesWithinDateRangeResponse` object
 *
 * @package CommunicatorCorp\Client
 * @author  Daniel Morris <daniel@rippleffect.com>
 */
class GetEmailDispatchesWithinDateRangeResponseTest extends AbstractIterableResponseTest
{
    /**
     * {@inheritDoc}
     *
     * @return GetEmailDispatchesWithinDateRangeResponse
     */
    public function getResponseObject()
    {
        return new GetEmailDispatchesWithinDateRangeResponse();
    }

    /**
     * {@inheritDoc}
     *
     * @return array
     */
    public function resultObjectPropertyProvider()
    {
        return [
            ['GetEmailDispatchesWithinDateRangeResult'],
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
            ['EmailDispatch']
        ];
    }
}
