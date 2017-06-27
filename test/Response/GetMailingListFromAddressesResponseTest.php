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

use CommunicatorCorp\Client\Response\GetMailingListFromAddressesResponse;

/**
 * Tests the `GetMailingListFromAddressesResponse` object
 *
 * @package CommunicatorCorp\Client
 * @author  Daniel Morris <daniel@rippleffect.com>
 */
class GetMailingListFromAddressesResponseTest extends AbstractIterableResponseTest
{
    /**
     * {@inheritDoc}
     *
     * @return array
     */
    public function resultObjectPropertyProvider()
    {
        return [
            ['GetMailingListFromAddressesResult'],
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
            ['FromAddress'],
        ];
    }

    /**
     * {@inheritDoc}
     *
     * @return GetMailingListFromAddressesResponse
     */
    public function getResponseObject()
    {
        return new GetMailingListFromAddressesResponse();
    }
}
