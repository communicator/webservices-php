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

use CommunicatorCorp\Client\Response\CreateMailingListResponse;

/**
 * Tests the `CreateMailingListResponse` object
 *
 * @package CommunicatorCorp\Client
 * @author  Daniel Morris <daniel@rippleffect.com>
 */
class CreateMailingListResponseTest extends AbstractResponseTest
{
    /**
     * {@inheritDoc}
     *
     * @return CreateMailingListResponse
     */
    public function getResponseObject()
    {
        return new CreateMailingListResponse();
    }

    /**
     * {@inheritDoc}
     *
     * @return array
     */
    public function resultObjectPropertyProvider()
    {
        return [
            ['CreateMailingListResult'],
        ];
    }
}
