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
 * Response object for the `GetClientTables` request
 *
 * @package CommunicatorCorp\Client
 * @author  Daniel Morris <daniel@rippleffect.com>
 */
class GetClientTablesResponse extends AbstractIterableResponse
{
    /**
     * {@inheritDoc}
     *
     * @return string
     */
    public function getResultObjectProperty()
    {
        return 'GetClientTablesResult';
    }

    /**
     * {@inheritDoc}
     *
     * @return string
     */
    public function getObjectDefinitionProperty()
    {
        return 'ClientTable';
    }
}
