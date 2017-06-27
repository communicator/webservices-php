<?php

/*
 * CommunicatorCorp\Client
 *
 * Copyright © 2015 Rippleffect Studio Ltd
 * Rights reserved.
 */

namespace CommunicatorCorp\Client\EnumerationType;

use MyCLabs\Enum\Enum;

/**
 * Subscription update method enumeration type.
 *
 * @package CommunicatorCorp\Client\EnumerationType
 * @author  Daniel Morris <daniel@rippleffect.com>
 */
final class SubscriptionUpdateMethod extends Enum
{
    /**
     * Represents subscribe all in the `SubscriptionUpdateMethod`.
     *
     * @const string
     */
    const SUBSCRIBE_ALL = 'SubscribeAll';

    /**
     * Represents unsubscribe all in the `SubscriptionUpdateMethod`.
     *
     * @const string
     */
    const UNSUBSCRIBE_ALL = 'UnsubscribeAll';

    /**
     * Represents honour existing unsubscribes in the `SubscriptionUpdateMethod`.
     *
     * @const string
     */
    const HONOUR_EXISTING_UNSUBSCRIBES = 'HonourExistingUnsubscribes';
}
