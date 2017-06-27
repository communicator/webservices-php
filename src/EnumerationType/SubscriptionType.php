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
 * Subscription type enumeration object
 *
 * @package CommunicatorCorp\Client
 * @author  Daniel Morris <daniel@rippleffect.com>
 */
final class SubscriptionType extends Enum
{
    /**
     * Represents a single opt-in `SubscriptionType`
     *
     * @const string
     */
    const SINGLE_OPTIN = 'SingleOptIn';

    /**
     * Represents a double opt-in `SubscriptionType`
     *
     * @const string
     */
    const DOUBLE_OPTIN = 'DoubleOptIn';
}
