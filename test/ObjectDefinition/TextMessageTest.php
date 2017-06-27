<?php

/*
 * Communicator\Client
 *
 * Copyright © 2016 Rippleffect Studio Ltd
 * Rights reserved.
 */

namespace CommunicatorCorp\Client\Test\ObjectDefinition;

use CommunicatorCorp\Client\EnumerationType\MailingType;
use CommunicatorCorp\Client\ObjectDefinition\TextDispatch;
use CommunicatorCorp\Client\ObjectDefinition\TextMessage;

/**
 * Tests the `TextMessage` object definition.
 *
 * @package CommunicatorCorp\Client\Test
 * @author  Daniel Morris <daniel@rippleffect.com>
 */
class TextMessageTest extends \PHPUnit_Framework_TestCase
{
    /**
     * Tests the mutators and accessors on the `TextMessage` object definition.
     *
     * @return void
     */
    public function testMutatorsAndAccessors()
    {
        $textMessage = (new TextMessage)
            ->setId(1)
            ->setMailingListId(2)
            ->setName('Text message name')
            ->setDescription('Text message description')
            ->setMessage('Text message')
        ;

        $this->assertEquals(1, $textMessage->getId());
        $this->assertEquals(2, $textMessage->getMailingListId());
        $this->assertEquals('Text message name', $textMessage->getName());
        $this->assertEquals('Text message description', $textMessage->getDescription());
        $this->assertEquals('Text message', $textMessage->getMessage());
    }
}
