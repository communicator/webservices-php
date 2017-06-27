<?php

/*
 * CommunicatorCorp\Client
 *
 * Copyright © 2015 Rippleffect Studio Ltd
 * Rights reserved.
 */

namespace CommunicatorCorp\Client\Test\Response;

use CommunicatorCorp\Client\Response\DataImporterResponse;

/**
 * Tests the `DataImporterResponse`.
 *
 * @package CommunicatorCorp\Client\Test\Response
 * @author  Daniel Morris <daniel@rippleffect.com>
 */
class DataImportResponseTest extends AbstractResponseTest
{
    /**
     * {@inheritDoc}
     *
     * @return DataImporterResponse
     */
    public function getResponseObject()
    {
        return new DataImporterResponse();
    }

    /**
     * {@inheritDoc}
     *
     * @return array
     */
    public function resultObjectPropertyProvider()
    {
        return [
            ['DataImporterResult']
        ];
    }
}
