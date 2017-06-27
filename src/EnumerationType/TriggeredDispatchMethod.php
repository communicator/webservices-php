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
 * Triggered dispatch method enumeration object.
 *
 * @package CommunicatorCorp\Client
 * @author  Daniel Morris <daniel@rippleffect.com>
 */
final class TriggeredDispatchMethod extends Enum
{
    /**
     * Represents a limited send `TriggeredDispatchMethod`.
     *
     * @const string
     */
    const ONLY_SEND_TO_NEW_SUBSCRIBERS = 'OnlySendToNewSubscribers';

    /**
     * Represents a send to all `TriggeredDispatchMethod`.
     *
     * @const string
     */
    const SEND_TO_ALL_SUBSCRIBERS = 'SendToAllSubscribers';
}
