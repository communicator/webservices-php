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
 * Table type enumeration object
 *
 * @package CommunicatorCorp\Client
 * @author  Daniel Morris <daniel@rippleffect.com>
 */
final class TableType extends Enum
{
    /**
     * Represents a contact table in the `TableType`
     *
     * @const string
     */
    const CONTACT = 'Contact';

    /**
     * Represents a data table in the `TableType`
     *
     * @const string
     */
    const DATA = 'Data';

    /**
     * Represents a lookup table in the `TableType`
     *
     * @const string
     */
    const LOOKUP = 'Lookup';
}
