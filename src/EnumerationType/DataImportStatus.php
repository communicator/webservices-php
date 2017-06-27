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
 * Data import status enumeration object.
 *
 * @package CommunicatorCorp\Client
 * @author  Daniel Morris <daniel@rippleffect.com>
 */
final class DataImportStatus extends Enum
{
    /**
     * Represents awaiting authorisation in the `DataImportStatus`.
     *
     * @const string
     */
    const AWAITING_AUTHORISATION = 'AwaitingAuthorisation';

    /**
     * Represents awaiting importing in the `DataImportStatus`.
     *
     * @const string
     */
    const AWAITING_IMPORTING = 'AwaitingImporting';

    /**
     * Represents preparing in the `DataImportStatus`.
     *
     * @const string
     */
    const PREPARING = 'Preparing';

    /**
     * Represents pending in the `DataImportStatus`.
     *
     * @const string
     */
    const PENDING = 'Pending';

    /**
     * Represents importing in the `DataImportStatus`.
     *
     * @const string
     */
    const IMPORTING = 'Importing';

    /**
     * Represents pausing in the `DataImportStatus`.
     *
     * @const string
     */
    const PAUSING = 'Pausing';

    /**
     * Represents paused in the `DataImportStatus`.
     *
     * @const string
     */
    const PAUSED = 'Paused';

    /**
     * Represents paused on error in the `DataImportStatus`.
     *
     * @const string
     */
    const PAUSED_ON_ERROR = 'PausedOnError';

    /**
     * Represents cancelled in the `DataImportStatus`.
     *
     * @const string
     */
    const CANCELLED = 'Cancelled';

    /**
     * Represents cancelled on data error in the `DataImportStatus`.
     *
     * @const string
     */
    const CANCELLED_ON_DATA_ERROR = 'CancelledOnDataError';

    /**
     * Represents complete in the `DataImportStatus`.
     *
     * @const string
     */
    const COMPLETE = 'Complete';

    /**
     * Represents failed in the `DataImportStatus`.
     *
     * @const string
     */
    const FAILED = 'Failed';
}
