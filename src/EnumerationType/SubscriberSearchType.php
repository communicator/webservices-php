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
 * Subscriber search type enumeration object
 *
 * @package CommunicatorCorp\Client
 * @author  Daniel Morris <daniel@rippleffect.com>
 */
final class SubscriberSearchType extends Enum
{
    /**
     * Represents all users in the `SubscriberSearchType`
     *
     * @const string
     */
    const ALL = 'All';

    /**
     * Represents only subscribed users in the `SubscriberSearchType`
     *
     * @const string
     */
    const ONLY_SUBSCRIBED = 'OnlySubscribed';

    /**
     * Represents only explicitly unsubscribed users in the `SubscriberSearchType`
     *
     * @const string
     */
    const ONLY_EXPLICITLY_UNSUBSCRIBED = 'OnlyExplicitlyUnsubscribed';
}
