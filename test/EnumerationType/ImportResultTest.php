<?php

/*
 * CommunicatorCorp\Communicator
 *
 * Copyright © 2015 Rippleffect Studio Ltd
 * Rights reserved.
 */

namespace CommunicatorCorp\Client\Test\EnumerationType;

/**
 * Tests the `ImportResult` enumeration type.
 *
 * @package CommunicatorCorp\Client\Test
 * @author  Daniel Morris <daniel@rippleffect.com>
 */
class ImportResultTest extends AbstractTypeTest
{
    /**
     * {@inheritDoc}
     *
     * @return string
     */
    public function getType()
    {
        return 'ImportResult';
    }

    /**
     * {@inheritDoc}
     *
     * @return array
     */
    public function typeProvider()
    {
        return [
            ['FAILED_INSERTING', 'FailedInserting'],
            ['FAILED_UPDATING', 'FailedUpdating'],
            ['SUCCESS_INSERTING', 'SuccessInserting'],
            ['SUCCESS_UPDATING', 'SuccessUpdating'],
            ['PRIMARY_KEY_VIOLATION', 'PrimaryKeyViolation'],
            ['FOREIGN_KEY_VIOLATION', 'ForeignKeyViolation'],
            ['COLUMN_MAPPING_FAILURE', 'ColumnMappingFailure'],
            ['COLUMNS_NOT_IN_TABLE', 'ColumnsNotInTable'],
            ['NO_REQUIRED_COLUMN_IN_TABLE', 'NoRequiredColumnInTable'],
            ['COLUMN_REQUIRED', 'ColumnRequired'],
            ['DUPLICATE_COLUMN_MAPPING', 'DuplicateColumnMapping'],
            ['NO_CHANGE_TO_EXISTING_CONTACT', 'NoChangeToExistingContact'],
        ];
    }
}
