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

use CommunicatorCorp\Client\Response\GetMailingListsResponse;

/**
 * Tests the `GetMailingListsResponse` object
 *
 * @package CommunicatorCorp\Client
 * @author  Daniel Morris <daniel@rippleffect.com>
 */
class GetMailingListsResponseTest extends AbstractIterableResponseTest
{
    /**
     * {@inheritDoc}
     *
     * @return GetMailingListsResponse
     */
    public function getResponseObject()
    {
        return new GetMailingListsResponse();
    }

    /**
     * {@inheritDoc}
     *
     * @return array
     */
    public function resultObjectPropertyProvider()
    {
        return [
            ['GetMailingListsResult'],
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
            ['MailingList']
        ];
    }
}
