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
 * Join type enumeration object
 *
 * @package CommunicatorCorp\Client
 * @author  Daniel Morris <daniel@rippleffect.com>
 */
final class JoinType extends Enum
{
    /**
     * Represents an inner join in the `JoinType`
     *
     * @const string
     */
    const INNER = 'Inner';

    /**
     * Represents an outer join in the `JoinType`
     *
     * @const string
     */
    const OUTER = 'Outer';
}
