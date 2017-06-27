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
 * Data import update method enumeration object.
 *
 * @package CommunicatorCorp\Client
 * @author  Daniel Morris <daniel@rippleffect.com>
 */
final class DataImportUpdateMethod extends Enum
{
    /**
     * Represents an insert method in the `DataImportUpdateMethod`.
     *
     * @const string
     */
    const INSERT = 'Insert';

    /**
     * Represents an update method in the `DataImportUpdateMethod`.
     *
     * @const string
     */
    const UPDATE = 'Update';

    /**
     * Represents an upsert method in the `DataImportUpdateMethod`.
     *
     * @const string
     */
    const UPSERT = 'Upsert';
}
