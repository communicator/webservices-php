<?php

/*
 * Communicator\Client
 *
 * Copyright © 2015 Rippleffect Studio Ltd
 * Rights reserved.
 */

namespace CommunicatorCorp\Client\Test\ObjectDefinition;

use CommunicatorCorp\Client\EnumerationType\ControlCommand;
use CommunicatorCorp\Client\ObjectDefinition\Control;

/**
 * Tests the `Control` object definition.
 *
 * @package Communicator\Client
 * @author  Daniel Morris <daniel@rippleffect.com>
 */
class ControlTest extends \PHPUnit_Framework_TestCase
{
    /**
     * Tests the mutators and accessors on the `Control` object definition.
     *
     * @return void
     */
    public function testMutatorsAndAccessors()
    {
        $command = new ControlCommand(ControlCommand::AUTHORISE);

        $control = new Control();

        $control
            ->setId(1)
            ->setCommand($command)
        ;

        $this->assertEquals(1, $control->getId());
        $this->assertEquals('Authorise', $control->getCommand());
    }
}
