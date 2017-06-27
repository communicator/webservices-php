<?php

/*
 * Communicator\CommunicatorCorp
 *
 * Copyright © 2015 Rippleffect Studio Ltd
 * Rights reserved.
 */

namespace CommunicatorCorp\Client\EnumerationType;

use MyCLabs\Enum\Enum;

/**
 * Import result enumeration object.
 *
 * @package CommunicatorCorp\Client\EnumerationType
 * @author  Daniel Morris <daniel@rippleffect.com>
 */
final class ImportResult extends Enum
{
    /**
     * Represents a response indicative of a failed insert.
     *
     * @const string
     */
    const FAILED_INSERTING = 'FailedInserting';

    /**
     * Represents a response indicative of a failed update.
     *
     * @const string
     */
    const FAILED_UPDATING = 'FailedUpdating';

    /**
     * Represents a response indicative of a successful insert.
     *
     * @const string
     */
    const SUCCESS_INSERTING = 'SuccessInserting';

    /**
     * Represents a response indicative of a successful update.
     *
     * @const string
     */
    const SUCCESS_UPDATING = 'SuccessUpdating';

    /**
     * Represents a response indicative of a primary key violation.
     *
     * @const string
     */
    const PRIMARY_KEY_VIOLATION = 'PrimaryKeyViolation';

    /**
     * Represents a response indicative of a foreign key violation.
     *
     * @const string
     */
    const FOREIGN_KEY_VIOLATION = 'ForeignKeyViolation';

    /**
     * Represents a response indicative of a column mapping failure.
     *
     * @const string
     */
    const COLUMN_MAPPING_FAILURE = 'ColumnMappingFailure';

    /**
     * Represents a response indicative of non-existing columns.
     *
     * @const string
     */
    const COLUMNS_NOT_IN_TABLE = 'ColumnsNotInTable';

    /**
     * Represents a response indicative of a table without a required column.
     *
     * @const string
     */
    const NO_REQUIRED_COLUMN_IN_TABLE = 'NoRequiredColumnInTable';

    /**
     * Represents a response indicative of a required column missing.
     *
     * @const string
     */
    const COLUMN_REQUIRED = 'ColumnRequired';

    /**
     * Represents a response indicative of a duplicate column mapping.
     *
     * @const string
     */
    const DUPLICATE_COLUMN_MAPPING = 'DuplicateColumnMapping';

    /**
     * Represents a response indicative of no changes made.
     *
     * @const string
     */
    const NO_CHANGE_TO_EXISTING_CONTACT = 'NoChangeToExistingContact';
}
