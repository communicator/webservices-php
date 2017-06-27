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

use CommunicatorCorp\Client\Response\UpdateMailingListResponse;

/**
 * Tests the `UpdateMailingListResponse` object
 *
 * @package CommunicatorCorp\Client
 * @author  Daniel Morris <daniel@rippleffect.com>
 */
class UpdateMailingListResponseTest extends AbstractResponseTest
{
    /**
     * {@inheritDoc}
     *
     * @return UpdateMailingListResponse
     */
    public function getResponseObject()
    {
        return new UpdateMailingListResponse();
    }

    /**
     * {@inheritDoc}
     *
     * @return array
     */
    public function resultObjectPropertyProvider()
    {
        return [
            ['UpdateMailingListResult'],
        ];
    }
}
