<?php

/*
 * CommunicatorCorp\Client
 *
 * Copyright © 2015 Rippleffect Studio Ltd
 * Rights reserved.
 */

namespace CommunicatorCorp\Client\Test\ObjectDefinition;

use CommunicatorCorp\Client\ObjectDefinition\MessageBody;

/**
 * Tests the `MessageBody` object definition.
 *
 * @package CommunicatorCorp\Client\Test
 * @author  Daniel Morris <daniel@rippleffect.com>
 */
class MessageBodyTest extends \PHPUnit_Framework_TestCase
{
    /**
     * Tests the mutators and accessors on the `MessageBody` object definition.
     *
     * @return void
     */
    public function testMutatorsAndAccessors()
    {
        $messageBody = new MessageBody();

        $messageBody
            ->setId(1)
            ->setMailingListId(2)
            ->setName('Name.')
            ->setDescription('Description.')
            ->setPlainText('Hello, world!')
            ->setHtmlText('<h1>Hello, world!</h1>')
        ;

        $this->assertEquals(1, $messageBody->getId());
        $this->assertEquals(2, $messageBody->getMailingListId());
        $this->assertEquals('Name.', $messageBody->getName());
        $this->assertEquals('Description.', $messageBody->getDescription());
        $this->assertEquals('Hello, world!', $messageBody->getPlainText());
        $this->assertEquals('<h1>Hello, world!</h1>', $messageBody->getHtmlText());
    }
}
