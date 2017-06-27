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

use CommunicatorCorp\Client\ObjectDefinition\ClientDataTable;

/**
 * Tests the `ClientDataTable` object definition
 *
 * @package CommunicatorCorp\Client
 * @author  Daniel Morris <daniel@rippleffect.com>
 */
class ClientDataTableTest extends \PHPUnit_Framework_TestCase
{
    /**
     * Tests the mutators and accessors on the `ClientDataTable` object definition
     *
     * @return void
     */
    public function testMutatorsAndAccessors()
    {
        $clientDataTable = new ClientDataTable();

        $clientDataTable->setId(1);
        $this->assertEquals(1, $clientDataTable->getId());

        $clientDataTable->setJoinType('Inner');
        $this->assertEquals('Inner', $clientDataTable->getJoinType());
    }
}
