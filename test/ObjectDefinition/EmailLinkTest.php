<?php

/*
 * CommunicatorCorp\Client
 *
 * Copyright © 2015 Rippleffect Studio Ltd
 * Rights reserved.
 */

namespace CommunicatorCorp\Client\Test\ObjectDefinition;

use CommunicatorCorp\Client\ObjectDefinition\EmailLink;

/**
 * Tests the `EmailLink` object definition.
 *
 * @package CommunicatorCorp\Client\Test
 * @author  Daniel Morris <daniel@rippleffect.com>
 */
class EmailLinkTest extends \PHPUnit_Framework_TestCase
{
    /**
     * Tests the mutators and accessors on the `EmailLink` object definition.
     *
     * @return void
     */
    public function testMutatorsAndAccessors()
    {
        $emailLink = new EmailLink();

        $emailLink
            ->setId(1)
            ->setName('Name.')
            ->setUrl('https://www.rippleffect.com')
            ->setTotalClicks(10)
            ->setTotalUniqueClicks(8)
        ;

        $this->assertEquals(1, $emailLink->getId());
        $this->assertEquals('Name.', $emailLink->getName());
        $this->assertEquals('https://www.rippleffect.com', $emailLink->getUrl());
        $this->assertEquals(10, $emailLink->getTotalClicks());
        $this->assertEquals(8, $emailLink->getTotalUniqueClicks());
    }
}
