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
 * Control command enumeration object.
 *
 * @package CommunicatorCorp\Client
 * @author  Daniel Morris <daniel@rippleffect.com>
 */
final class ControlCommand extends Enum
{
    /**
     * Represents authorise in the `ControlCommand`.
     *
     * @const string
     */
    const AUTHORISE = 'Authorise';

    /**
     * Represents pause in the `ControlCommand`.
     *
     * @const string
     */
    const PAUSE = 'Pause';

    /**
     * Represents resume in the `ControlCommand`.
     *
     * @const string
     */
    const RESUME = 'Resume';

    /**
     * Represents cancel in the `ControlCommand`.
     *
     * @const string
     */
    const CANCEL = 'Cancel';
}
