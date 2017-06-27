<?php

/*
 * CommunicatorCorp\Client
 *
 * Copyright © 2015 Rippleffect Studio Ltd
 * Rights reserved.
 *
 * PHP version 5.4+
 */

namespace CommunicatorCorp\Client\Test\EnumerationType;

/**
 * Tests the `SubscriptionSourceType` enum
 *
 * @package CommunicatorCorp\Client
 * @author  Daniel Morris <daniel@rippleffect.com>
 */
class SubscriptionSourceTypeTest extends AbstractTypeTest
{
    /**
     * {@inheritDoc}
     *
     * @return string
     */
    public function getType()
    {
        return 'SubscriptionSourceType';
    }

    /**
     * {@inheritDoc}
     *
     * @return array
     */
    public function typeProvider()
    {
        return [
            ['TEST_CASE', 'TestCase'],
            ['DATA_IMPORT', 'DataImport'],
            ['DATA_CAPTURE_FORM', 'DataCaptureForm'],
            ['MANUAL_ENTRY', 'ManualEntry'],
            ['WEB_SERVICE', 'WebService'],
            ['SUBSCRIPTION_CONFIRMATION', 'SubscriptionConfirmation'],
        ];
    }
}
