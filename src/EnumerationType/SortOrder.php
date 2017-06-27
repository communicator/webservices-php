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
 * Sort order type enumeration object
 *
 * @package CommunicatorCorp\Client
 * @author  Daniel Morris <daniel@rippleffect.com>
 */
final class SortOrder extends Enum
{
    /**
     * Represents the oldest first `SortOrderType`
     *
     * @const string
     */
    const OLDEST_FIRST = 'OldestFirst';

    /**
     * Represents the newest first `SortOrderType`
     *
     * @const string
     */
    const NEWEST_FIRST = 'NewestFirst';
}
