<?php

/*
 * CommunicatorCorp\Client
 *
 * Copyright © 2015 Rippleffect Studio Ltd
 * Rights reserved.
 */

namespace CommunicatorCorp\Client\Test\EnumerationType;

/**
 * Tests the `SqlCondition` enumeration type.
 *
 * @package CommunicatorCorp\Client\Test
 * @author  Daniel Morris <daniel@rippleffect.com>
 */
class SqlConditionTest extends AbstractTypeTest
{
    /**
     * {@inheritDoc}
     *
     * @return string
     */
    public function getType()
    {
        return 'SqlCondition';
    }

    /**
     * {@inheritDoc}
     *
     * @return array
     */
    public function typeProvider()
    {
        return [
            ['NONE', 'None'],
            ['_AND', 'AND'],
            ['_OR', 'OR'],
        ];
    }
}
