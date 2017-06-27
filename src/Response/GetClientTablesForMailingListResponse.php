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
 * Response object for the `GetClientTablesForMailingList` request
 *
 * @package CommunicatorCorp\Client
 * @author  Daniel Morris <daniel@rippleffect.com>
 */
class GetClientTablesForMailingListResponse extends GetClientTablesResponse
{
    /**
     * {@inheritDoc}
     *
     * @return string
     */
    public function getResultObjectProperty()
    {
        return 'GetClientTablesForMailingListResult';
    }
}
