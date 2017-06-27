<?php

/*
 * CommunicatorCorp\Client
 *
 * Copyright © 2015 Rippleffect Studio Ltd
 * Rights reserved.
 */

namespace CommunicatorCorp\Client\Test\EnumerationType;

/**
 * Tests the data import status enumeration object.
 *
 * @package CommunicatorCorp\Client\Test
 * @author  Daniel Morris <daniel@rippleffect.com>
 */
class DataImportStatusTest extends AbstractTypeTest
{
    /**
     * {@inheritDoc}
     *
     * @return string
     */
    public function getType()
    {
        return 'DataImportStatus';
    }

    /**
     * {@inheritDoc}
     *
     * @return array
     */
    public function typeProvider()
    {
        return [
            ['AWAITING_AUTHORISATION', 'AwaitingAuthorisation'],
            ['AWAITING_IMPORTING', 'AwaitingImporting'],
            ['PREPARING', 'Preparing'],
            ['PENDING', 'Pending'],
            ['IMPORTING', 'Importing'],
            ['PAUSING', 'Pausing'],
            ['PAUSED', 'Paused'],
            ['PAUSED_ON_ERROR', 'PausedOnError'],
            ['CANCELLED', 'Cancelled'],
            ['CANCELLED_ON_DATA_ERROR', 'CancelledOnDataError'],
            ['COMPLETE', 'Complete'],
            ['FAILED', 'Failed'],
        ];
    }
}
