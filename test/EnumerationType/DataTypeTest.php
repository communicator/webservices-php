<?php

/*
 * CommunicatorCorp\Client
 *
 * Copyright © 2015 Rippleffect Studio Ltd
 * Rights reserved.
 *
 * PHP version 5.4+
 */

namespace CommunicatorCorp\Client\Test\EnumerationType;

/**
 * Tests the `DataType` enum
 *
 * @package CommunicatorCorp\Client
 * @author  Daniel Morris <daniel@rippleffect.com>
 */
class DataTypeTest extends AbstractTypeTest
{
    /**
     * {@inheritDoc}
     *
     * @return string
     */
    public function getType()
    {
        return 'DataType';
    }

    /**
     * {@inheritDoc}
     *
     * @return array
     */
    public function typeProvider()
    {
        return [
            ['CURRENCY', 'Currency'],
            ['DATETIME', 'Date/Time'],
            ['DECIMAL', 'Decimal'],
            ['HTML', 'HTML'],
            ['LARGE_WHOLE_NUMBERS', 'Large Whole Numbers'],
            ['LONG_HTML', 'Long HTML'],
            ['LONG_TEXT', 'Long Text'],
            ['OTHER_EMAIL_ADDRESS', 'Other Email Address'],
            ['OTHER_MOBILE_NUMBER', 'Other Mobile Number'],
            ['TEXT', 'Text'],
            ['TRUE_FALSE', 'True/False'],
            ['UNIQUE_IDENTIFIER', 'Unique Identifier'],
            ['WHOLE_NUMBERS', 'Whole Numbers'],
        ];
    }
}
