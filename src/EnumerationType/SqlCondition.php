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
 * SQL condition enumeration type.
 *
 * @package CommunicatorCorp\Client
 * @author  Daniel Morris <daniel@rippleffect.com>
 */
class SqlCondition extends Enum
{
    /**
     * Represents none in the `SqlCondition`.
     *
     * @const string
     */
    const NONE = 'None';

    /**
     * Represents AND in the `SqlCondition`.
     *
     * @const string
     */
    const _AND = 'AND';

    /**
     * Represents OR in the `SqlCondition`.
     *
     * @const string
     */
    const _OR = 'OR';
}
