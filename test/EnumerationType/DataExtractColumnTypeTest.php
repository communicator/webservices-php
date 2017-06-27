<?php

/*
 * CommunicatorCorp\Client
 *
 * Copyright © 2015 Rippleffect Studio Ltd
 * Rights reserved.
 */

namespace CommunicatorCorp\Client\Test\EnumerationType;

/**
 * Tests the data extract column type enumeration object.
 *
 * @package CommunicatorCorp\Client\Test
 * @author  Daniel Morris <daniel@rippleffect.com>
 */
class DataExtractColumnTypeTest extends AbstractTypeTest
{
    /**
     * {@inheritDoc}
     *
     * @return string
     */
    public function getType()
    {
        return 'DataExtractColumnType';
    }

    /**
     * {@inheritDoc}
     *
     * @return array
     */
    public function typeProvider()
    {
        return [
            ['CLIENT_TABLE_COLUMN', 'ClientTableColumn'],
            ['FIXED_VALUE', 'FixedValue'],
        ];
    }
}
