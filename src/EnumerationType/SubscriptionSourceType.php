<?php

/*
 * CommunicatorCorp\Client
 *
 * Copyright © 2015 Rippleffect Studio Ltd
 * Rights reserved.
 *
 * PHP version 5.4+
 */

namespace CommunicatorCorp\Client\EnumerationType;

use MyCLabs\Enum\Enum;

/**
 * Subscription source type enumeration object
 *
 * @package CommunicatorCorp\Client
 * @author  Daniel Morris <daniel@rippleffect.com>
 */
final class SubscriptionSourceType extends Enum
{
    /**
     * Represents a test case in the `SubscriptionSourceType`
     *
     * @const string
     */
    const TEST_CASE = 'TestCase';

    /**
     * Represents a data import in the `SubscriptionSourceType`
     *
     * @const string
     */
    const DATA_IMPORT = 'DataImport';

    /**
     * Represents a data capture form in the `SubscriptionSourceType`
     *
     * @const string
     */
    const DATA_CAPTURE_FORM = 'DataCaptureForm';

    /**
     * Represents manual entry in the `SubscriptionSourceType`
     *
     * @const string
     */
    const MANUAL_ENTRY = 'ManualEntry';

    /**
     * Represents a web service in the `SubscriptionSourceType`
     *
     * @const string
     */
    const WEB_SERVICE = 'WebService';

    /**
     * Represents a subscription confirmation in the `SubscriptionSourceType`
     *
     * @const string
     */
    const SUBSCRIPTION_CONFIRMATION = 'SubscriptionConfirmation';
}
