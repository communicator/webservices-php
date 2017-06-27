<?php

/*
 * CommunicatorCorp\Communicator
 *
 * Copyright © 2015 Rippleffect Studio Ltd
 * Rights reserved.
 */

namespace CommunicatorCorp\Client\Test\ObjectDefinition;

use CommunicatorCorp\Client\ObjectDefinition\ExtractColumn;

/**
 * Tests the `ExtractColumn` object definition.
 *
 * @package CommunicatorCorp\Client\Test
 * @author  Daniel Morris <daniel@rippleffect.com>
 */
class ExtractColumnTest extends \PHPUnit_Framework_TestCase
{
    /**
     * Tests the mutators and accessors on the `ExtractColumn` object definition.
     *
     * @return void
     */
    public function testMutatorsAndAccessors()
    {
        $extractColumn = new ExtractColumn();

        $extractColumn
            ->setColumnId(1)
            ->setRelationshipId(2)
        ;

        $this->assertEquals(1, $extractColumn->getColumnId());
        $this->assertEquals(2, $extractColumn->getRelationshipId());
    }
}
