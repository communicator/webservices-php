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

use CommunicatorCorp\Client\EnumerationType\MailingType;
use CommunicatorCorp\Client\ObjectDefinition\Dispatch;

/**
 * Tests the `Dispatch` object definition
 *
 * @package CommunicatorCorp\Client
 * @author  Daniel Morris <daniel@rippleffect.com>
 */
class DispatchTest extends \PHPUnit_Framework_TestCase
{
    /**
     * Tests the mutators and accessors on the `Dispatch` object definition
     *
     * @return void
     */
    public function testMutatorsAndAccessors()
    {
        $dispatch = new Dispatch();

        $dispatch->setId(1);
        $this->assertEquals(1, $dispatch->getId());

        $dispatch->setMailingType(MailingType::EMAIL);
        $this->assertEquals(MailingType::EMAIL, $dispatch->getMailingType());

        $dispatch->setStatus('Dispatching');
        $this->assertEquals('Dispatching', $dispatch->getStatus());

        $dispatch->setDateScheduled('2015-04-20 16:20:00');
        $this->assertEquals('2015-04-20 16:20:00', $dispatch->getDateScheduled());

        $dispatch->setListSize(1597463007);
        $this->assertEquals(1597463007, $dispatch->getListSize());

        $dispatch->setTotalSuccess(3627487);
        $this->assertEquals(3627487, $dispatch->getTotalSuccess());

        $dispatch->setTotalFailed(2);
        $this->assertEquals(2, $dispatch->getTotalFailed());

        $dispatch->setTotalExcluded(1593835518);
        $this->assertEquals(1593835518, $dispatch->getTotalExcluded());

        $dispatch->setIsTest(true);
        $this->assertTrue($dispatch->getIsTest());
    }
}
