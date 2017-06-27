<?php

/*
 * CommunicatorCorp\Communicator
 *
 * Copyright © 2015 Rippleffect Studio Ltd
 * Rights reserved.
 */

namespace CommunicatorCorp\Client\EnumerationType;

use MyCLabs\Enum\Enum;

/**
 * Parameter type enumeration object.
 *
 * @package CommunicatorCorp\Client
 * @author  Daniel Morris <daniel@rippleffect.com>
 */
final class ParameterType extends Enum
{
    /**
     * Represents ignore in the `ParameterType`.
     *
     * @const string
     */
    const IGNORE = 'Ignore';

    /**
     * Represents column in the `ParameterType`.
     *
     * @const string
     */
    const COLUMN = 'Column';

    /**
     * Represents fixed in the `ParameterType`.
     *
     * @const string
     */
    const FIXED = 'Fixed';

    /**
     * Represents custom in the `ParameterType`.
     *
     * @const string
     */
    const CUSTOM = 'Custom';
}
