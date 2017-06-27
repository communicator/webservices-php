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
 * Extraction scope enumeration type.
 *
 * @package CommunicatorCorp\Client
 * @author  Daniel Morris <daniel@rippleffect.com>
 */
final class ExtractionScope extends Enum
{
    /**
     * Represents standard in the `ExtractionScope`.
     *
     * @const string
     */
    const STANDARD = 'Standard';

    /**
     * Represents extended in the `ExtractionScope`.
     *
     * @const string
     */
    const EXTENDED = 'Extended';
}
