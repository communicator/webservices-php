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

use CommunicatorCorp\Client\Response\GetClientTablesForMailingListResponse;

/**
 * Tests the `GetClientTablesForMailingListResponse` object
 *
 * @package CommunicatorCorp\Client
 * @author  Daniel Morris <daniel@rippleffect.com>
 */
class GetClientTablesForMailingListResponseTest extends AbstractIterableResponseTest
{
    /**
     * {@inheritDoc}
     *
     * @return array
     */
    public function resultObjectPropertyProvider()
    {
        return [
            ['GetClientTablesForMailingListResult'],
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
            ['ClientTable'],
        ];
    }

    /**
     * {@inheritDoc}
     *
     * @return GetClientTablesForMailingListResponse
     */
    public function getResponseObject()
    {
        return new GetClientTablesForMailingListResponse();
    }
}
