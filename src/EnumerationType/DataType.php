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
 * Data type enumeration object
 *
 * @package CommunicatorCorp\Client
 * @author  Daniel Morris <daniel@rippleffect.com>
 */
final class DataType extends Enum
{
    /**
     * Represents a currency column in the `DataType`
     *
     * @const string
     */
    const CURRENCY = 'Currency';

    /**
     * Represents a datetime column in the `DataType`
     *
     * @const string
     */
    const DATETIME = 'Date/Time';

    /**
     * Represents a decimal column in the `DataType`
     *
     * @const string
     */
    const DECIMAL = 'Decimal';

    /**
     * Represents a HTML column in the `DataType`
     *
     * @const string
     */
    const HTML = 'HTML';

    /**
     * Represents a large whole number column in the `DataType`
     *
     * @const string
     */
    const LARGE_WHOLE_NUMBERS = 'Large Whole Numbers';

    /**
     * Represents a long HTML column in the `DataType`
     *
     * @const string
     */
    const LONG_HTML = 'Long HTML';

    /**
     * Represents a long text column in the `DataType`
     *
     * @const string
     */
    const LONG_TEXT = 'Long Text';

    /**
     * @const string
     */
    const OTHER_EMAIL_ADDRESS = 'Other Email Address';

    /**
     * Represents an other mobile column in the `DataType`
     *
     * @const string
     */
    const OTHER_MOBILE_NUMBER = 'Other Mobile Number';

    /**
     * Represents a text column in the `DataType`
     *
     * @const string
     */
    const TEXT = 'Text';

    /**
     * Represents a boolean column in the `DataType`
     *
     * @const string
     */
    const TRUE_FALSE = 'True/False';

    /**
     * Represents a unique ID in the `DataType`
     *
     * @const string
     */
    const UNIQUE_IDENTIFIER = 'Unique Identifier';

    /**
     * Represents an integer column in the `DataType`
     *
     * @const string
     */
    const WHOLE_NUMBERS = 'Whole Numbers';
}
