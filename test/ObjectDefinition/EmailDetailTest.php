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

use CommunicatorCorp\Client\ObjectDefinition\EmailDetail;

/**
 * Tests the `EmailDetail` object definition
 *
 * @package CommunicatorCorp\Client
 * @author  Daniel Morris <daniel@rippleffect.com>
 */
class EmailDetailTest extends \PHPUnit_Framework_TestCase
{
    /**
     * Tests the mutators and accessors on the `EmailDetail` object definition
     *
     * @return void
     */
    public function testMutatorsAndAccessors()
    {
        $emailDetail = new EmailDetail();

        $emailDetail->setId(1);
        $this->assertEquals(1, $emailDetail->getId());

        $emailDetail->setMailingListId(2);
        $this->assertEquals(2, $emailDetail->getMailingListId());

        $emailDetail->setName('Name');
        $this->assertEquals('Name', $emailDetail->getName());

        $emailDetail->setDescription('Description');
        $this->assertEquals('Description', $emailDetail->getDescription());

        $emailDetail->setDateCreated('2015-04-20 16:20:00');
        $this->assertEquals('2015-04-20 16:20:00', $emailDetail->getDateCreated());

        $emailDetail->setDateEdited('2015-04-20 16:20:00');
        $this->assertEquals('2015-04-20 16:20:00', $emailDetail->getDateEdited());
    }
}
