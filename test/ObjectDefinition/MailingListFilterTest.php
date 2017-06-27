<?php

/*
 * CommunicatorCorp\Client
 *
 * Copyright © 2015 Rippleffect Studio Ltd
 * Rights reserved.
 */

namespace CommunicatorCorp\Client\Test\ObjectDefinition;

use CommunicatorCorp\Client\ObjectDefinition\MailingListFilter;
use CommunicatorCorp\Client\ObjectDefinition\MailingListFilterItem;

/**
 *
 *
 * @package CommunicatorCorp\Client
 * @author  Daniel Morris <daniel@rippleffect.com>
 */
class MailingListFilterTest extends \PHPUnit_Framework_TestCase
{
    /**
     * Tests the mutators and accessors on the `MailingListFilter` object definition.
     *
     * @return void
     */
    public function testMutatorsAndAccessors()
    {
        $mailingListFilterItems = array(new MailingListFilterItem());
        $mailingListFilter = new MailingListFilter();

        $mailingListFilter
            ->setId(1)
            ->setName('Name.')
            ->setDescription('Description.')
            ->setMailingListId(2)
            ->setFilterItems($mailingListFilterItems)
        ;

        $this->assertEquals(1, $mailingListFilter->getId());
        $this->assertEquals('Name.', $mailingListFilter->getName());
        $this->assertEquals('Description.', $mailingListFilter->getDescription());
        $this->assertEquals(2, $mailingListFilter->getMailingListId());
        $this->assertSame($mailingListFilterItems, $mailingListFilter->getFilterItems());
    }
}
