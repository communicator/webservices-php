<?php

/*
 * CommunicatorCorp\Client
 *
 * Copyright © 2015 Rippleffect Studio Ltd
 * Rights reserved.
 */

namespace CommunicatorCorp\Client\Test\ObjectDefinition;

use CommunicatorCorp\Client\EnumerationType\SqlCondition;
use CommunicatorCorp\Client\ObjectDefinition\ClientTableRelationship;
use CommunicatorCorp\Client\ObjectDefinition\MailingListFilterItem;

/**
 * Tests the `MailingListFilterItem` object definition.
 *
 * @package CommunicatorCorp\Client
 * @author  Daniel Morris <daniel@rippleffect.com>
 */
class MailingListFilterItemTest extends \PHPUnit_Framework_TestCase
{
    /**
     * Tests the mutators and accessors on the `MailingListFilterItem` object definition.
     *
     * @return void
     */
    public function testMutatorsAndAccessors()
    {
        $clientTableRelationship = new ClientTableRelationship();
        $mailingListFilterItem = new MailingListFilterItem();

        $mailingListFilterItem
            ->setId(1)
            ->setColumnId(2)
            ->setValue('Value.')
            ->setOperatorId(3)
            ->setCondition(SqlCondition::_AND)
            ->setRelationship($clientTableRelationship)
        ;

        $this->assertEquals(1, $mailingListFilterItem->getId());
        $this->assertEquals(2, $mailingListFilterItem->getColumnId());
        $this->assertEquals('Value.', $mailingListFilterItem->getValue());
        $this->assertEquals(3, $mailingListFilterItem->getOperatorId());
        $this->assertEquals(SqlCondition::_AND, $mailingListFilterItem->getCondition());
        $this->assertSame($clientTableRelationship, $mailingListFilterItem->getRelationship());
    }
}
