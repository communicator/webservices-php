<?php

/*
 * CommunicatorCorp\Client
 *
 * Copyright © 2015 Rippleffect Studio Ltd
 * Rights reserved.
 *
 * PHP version 5.4+
 */

namespace CommunicatorCorp\Client\Test\ObjectDefinition;

use CommunicatorCorp\Client\ObjectDefinition\ClientTable;

/**
 * Tests the `ClientTable` class
 *
 * @package CommunicatorCorp\Client
 * @author  Daniel Morris <daniel@rippleffect.com>
 */
class ClientTableTest extends \PHPUnit_Framework_TestCase
{
    /**
     * Tests the accessors of the `ClientTable` class
     *
     * @return void
     */
    public function testAccessors()
    {
        $clientTable = new ClientTable();

        $clientTable->setId(1597463007);
        $this->assertEquals(1597463007, $clientTable->getId());

        $clientTable->setName('Name');
        $this->assertEquals('Name', $clientTable->getName());

        $clientTable->setDescription('Description');
        $this->assertEquals('Description', $clientTable->getDescription());

        $clientTable->setTableType('Table type');
        $this->assertEquals('Table type', $clientTable->getTableType());

        $clientTable->setNoOfColumns(5);
        $this->assertEquals(5, $clientTable->getNoOfColumns());

        $clientTable->setNoOfSubscriptionLists(6);
        $this->assertEquals(6, $clientTable->getNoOfSubscriptionLists());
    }

    /**
     * Tests that an exception is thrown if more than one argument is passed to a mutator
     *
     * @expectedException \InvalidArgumentException
     */
    public function testMutatorWithMoreThanOneArgument()
    {
        $clientTable = new ClientTable();
        $clientTable->setId(1, 2);
    }
}
