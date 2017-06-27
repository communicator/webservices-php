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
 * Job status enumeration type.
 *
 * @package CommunicatorCorp\Client
 * @author  Daniel Morris <daniel@rippleffect.com>
 */
final class JobStatus extends Enum
{
    /**
     * Represents new in the `JobStatus`.
     *
     * @const string
     */
    const _NEW = 'New';

    /**
     * Represents processing in the `JobStatus`.
     *
     * @const string
     */
    const PROCESSING = 'Processing';

    /**
     * Represents complete in the `JobStatus`.
     *
     * @const string
     */
    const COMPLETE = 'Complete';
}
