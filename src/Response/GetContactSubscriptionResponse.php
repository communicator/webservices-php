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
 * Response object for the `GetContactSubscription` request
 *
 * @package CommunicatorCorp\Client\Response
 * @author  Daniel Morris <daniel@rippleffect.com>
 */
class GetContactSubscriptionResponse extends AbstractResponse
{
    /**
     * {@inheritDoc}
     *
     * @return string
     */
    public function getResultObjectProperty()
    {
        return 'GetContactSubscriptionResult';
    }
}
