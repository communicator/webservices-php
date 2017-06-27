<?php

/*
 * CommunicatorCorp\Client
 *
 * Copyright © 2015 Rippleffect Studio Ltd
 * Rights reserved.
 */

namespace CommunicatorCorp\Client\Test\ObjectDefinition;

use CommunicatorCorp\Client\ObjectDefinition\ColumnMapping;

/**
 * Tests the `ColumnMapping` class.
 *
 * @package CommunicatorCorp\Client
 * @author  Daniel Morris <daniel@rippleffect.com>
 */
class ColumnMappingTest extends \PHPUnit_Framework_TestCase
{
    /**
     * Tests the accessors of the `ColumnMapping` class.
     *
     * @return void
     */
    public function testAccessors()
    {
        $columnMapping = new ColumnMapping();

        $columnMapping->setColumnId(1);
        $this->assertEquals(1, $columnMapping->getColumnId());

        $columnMapping->setValue('Column value');
        $this->assertEquals('Column value', $columnMapping->getValue());
    }

    /**
     * Tests that an exception is thrown if more than one argument is passed to a mutator.
     *
     * @expectedException \InvalidArgumentException
     */
    public function testMutatorWithMoreThanOneArgument()
    {
        $columnMapping = new ColumnMapping();
        $columnMapping->setColumnId(1, 2);
    }
}
