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
 * Data extract column type enumeration object.
 *
 * @package CommunicatorCorp\Client
 * @author  Daniel Morris <daniel@rippleffect.com>
 */
final class DataExtractColumnType extends Enum
{
    /**
     * Represents a client table column in the `DataExtractColumnType`.
     *
     * @const string
     */
    const CLIENT_TABLE_COLUMN = 'ClientTableColumn';

    /**
     * Represents a fixed value in the `DataExtractColumnType`.
     *
     * @const string
     */
    const FIXED_VALUE = 'FixedValue';
}
