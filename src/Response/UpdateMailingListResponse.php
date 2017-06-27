<?php

/*
 * CommunicatorCorp\Client
 *
 * Copyright © 2015 Rippleffect Studio Ltd
 * Rights reserved.
 *
 * PHP version 5.4+
 */

namespace CommunicatorCorp\Client\Response;

/**
 * Response object for the `UpdateMailingListResponse` request
 *
 * @package CommunicatorCorp\Client
 * @author  Daniel Morris <daniel@rippleffect.com>
 */
class UpdateMailingListResponse extends AbstractResponse
{
    /**
     * {@inheritDoc}
     *
     * @return string
     */
    public function getResultObjectProperty()
    {
        return 'UpdateMailingListResult';
    }
}
