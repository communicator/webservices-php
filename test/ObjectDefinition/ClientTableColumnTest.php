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

use CommunicatorCorp\Client\ObjectDefinition\ClientTableColumn;

/**
 * Tests the `ClientTableColumn` object definition
 *
 * @package CommunicatorCorp\Client
 * @author  Daniel Morris <daniel@rippleffect.com>
 */
class ClientTableColumnTest extends \PHPUnit_Framework_TestCase
{
    /**
     * Tests the mutators and accessors on the `ClientTableColumn` object definition
     *
     * @return void
     */
    public function testMutatorsAndAccessors()
    {
        $clientTableColumn = new ClientTableColumn();

        $clientTableColumn->setId(1);
        $this->assertEquals(1, $clientTableColumn->getId());

        $clientTableColumn->setName('Name');
        $this->assertEquals('Name', $clientTableColumn->getName());
    }
}
