<?php

/*
 * CommunicatorCorp\Client
 *
 * Copyright © 2015 Rippleffect Studio Ltd
 * Rights reserved.
 */

namespace CommunicatorCorp\Client\Test\ObjectDefinition;

use CommunicatorCorp\Client\EnumerationType\TriggeredDispatchMethod;
use CommunicatorCorp\Client\ObjectDefinition\TriggeredDispatch;

/**
 * Tests the `TriggeredDispatch` object definition.
 *
 * @package CommunicatorCorp\Client
 * @author  Daniel Morris <daniel@rippleffect.com>
 */
class TriggeredDispatchTest extends \PHPUnit_Framework_TestCase
{
    /**
     * Tests the mutators and accessors on the `TriggeredDispatch` object definition.
     *
     * @return void
     */
    public function testMutatorsAndAccessors()
    {
        $triggeredDispatch = new TriggeredDispatch();

        $triggeredDispatch->setDispatchId(1);
        $this->assertEquals(1, $triggeredDispatch->getDispatchId());

        $triggeredDispatch->setTriggeredDispatchMethod(TriggeredDispatchMethod::SEND_TO_ALL_SUBSCRIBERS);
        $this->assertEquals(
            TriggeredDispatchMethod::SEND_TO_ALL_SUBSCRIBERS,
            $triggeredDispatch->getTriggeredDispatchMethod()
        );
    }
}
