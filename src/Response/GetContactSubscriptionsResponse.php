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
 * Response object for the `GetContactSubscriptions` request
 *
 * @package CommunicatorCorp\Client
 * @author  Daniel Morris <daniel@rippleffect.com>
 */
class GetContactSubscriptionsResponse extends AbstractIterableResponse
{
    /**
     * {@inheritDoc}
     *
     * @return string
     */
    public function getResultObjectProperty()
    {
        return 'GetContactSubscriptionsResult';
    }

    /**
     * {@inheritDoc}
     *
     * @return string
     */
    public function getObjectDefinitionProperty()
    {
        return 'SubscriptionInfo';
    }
}
