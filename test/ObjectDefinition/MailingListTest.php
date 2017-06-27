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

use CommunicatorCorp\Client\EnumerationType\SubscriptionType;
use CommunicatorCorp\Client\ObjectDefinition\ClientDataTable;
use CommunicatorCorp\Client\ObjectDefinition\ClientTableRelationship;
use CommunicatorCorp\Client\ObjectDefinition\MailingList;

/**
 * Tests the `MailingList` object definition
 *
 * @package CommunicatorCorp\Client
 * @author  Daniel Morris <daniel@rippleffect.com>
 */
class MailingListTest extends \PHPUnit_Framework_TestCase
{
    /**
     * Tests the mutators and accessors on the `MailingList` object definition
     *
     * @return void
     */
    public function testMutatorsAndAccessors()
    {
        $clientTableRelationship = new ClientTableRelationship();
        $subscriptionType = new SubscriptionType(SubscriptionType::SINGLE_OPTIN);
        $clientDataTable = new ClientDataTable();

        $mailingList = new MailingList();

        $mailingList->setId(1);
        $this->assertEquals(1, $mailingList->getId());

        $mailingList->setName('Name');
        $this->assertEquals('Name', $mailingList->getName());

        $mailingList->setDescription('Description');
        $this->assertEquals('Description', $mailingList->getDescription());

        $mailingList->setContactTableId(3);
        $this->assertEquals(3, $mailingList->getContactTableId());

        $mailingList->setClientDataTable($clientDataTable);
        $this->assertSame($clientDataTable, $mailingList->getClientDataTable());

        $mailingList->setRelationships([$clientTableRelationship]);
        $this->assertEquals([$clientTableRelationship], $mailingList->getRelationships());

        $mailingList->setSubscriptionType($subscriptionType);
        $this->assertEquals(SubscriptionType::SINGLE_OPTIN, $mailingList->getSubscriptionType()->getValue());

        $mailingList->setFromAddressId(2);
        $this->assertEquals(2, $mailingList->getFromAddressId());

        $mailingList->setFromName('From name');
        $this->assertEquals('From name', $mailingList->getFromName());

        $mailingList->setExternalUnsubscribeLink('https://unsubscribe.com');
        $this->assertEquals('https://unsubscribe.com', $mailingList->getExternalUnsubscribeLink());
    }
}
