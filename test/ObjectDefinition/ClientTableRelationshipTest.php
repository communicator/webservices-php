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

use CommunicatorCorp\Client\ObjectDefinition\ClientTableRelationship;

/**
 * Tests the `ClientTableRelationship` object definition
 *
 * @package CommunicatorCorp\Client
 * @author  Daniel Morris <daniel@rippleffect.com>
 */
class ClientTableRelationshipTest extends \PHPUnit_Framework_TestCase
{
    /**
     * Tests the mutators and accessors on the `ClientTableRelationship` object definition
     *
     * @return void
     */
    public function testMutatorsAndAccessors()
    {
        $clientTableRelationship = new ClientTableRelationship();

        $clientTableRelationship->setId(1);
        $this->assertEquals(1, $clientTableRelationship->getId());

        $clientTableRelationship->setAlias('Alias');
        $this->assertEquals('Alias', $clientTableRelationship->getAlias());

        $clientTableRelationship->setPrimaryKeyClientTableColumnId(2);
        $this->assertEquals(2, $clientTableRelationship->getPrimaryKeyClientTableColumnId());

        $clientTableRelationship->setPrimaryKeyClientTableId(3);
        $this->assertEquals(3, $clientTableRelationship->getPrimaryKeyClientTableId());

        $clientTableRelationship->setForeignKeyClientTableColumnId(4);
        $this->assertEquals(4, $clientTableRelationship->getForeignKeyClientTableColumnId());

        $clientTableRelationship->setForeignKeyClientTableId(5);
        $this->assertEquals(5, $clientTableRelationship->getForeignKeyClientTableId());
    }
}
