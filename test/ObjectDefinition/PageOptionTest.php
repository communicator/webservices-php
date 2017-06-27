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

use CommunicatorCorp\Client\EnumerationType\SortOrder;
use CommunicatorCorp\Client\ObjectDefinition\PageOption;

/**
 * Tests the `PageOption` object definition
 *
 * @package CommunicatorCorp\Client
 * @author  Daniel Morris <daniel@rippleffect.com>
 */
class PageOptionTest extends \PHPUnit_Framework_TestCase
{
    /**
     * Tests the mutators and accessors on the `PageOption` object definition
     *
     * @return void
     */
    public function testMutatorsAndAccessors()
    {
        $pageOption = new PageOption();
        $sortOrder = new SortOrder(SortOrder::NEWEST_FIRST);

        $pageOption->setStartIndex(1);
        $this->assertEquals(1, $pageOption->getStartIndex());

        $pageOption->setPageSize(2);
        $this->assertEquals(2, $pageOption->getPageSize());

        $pageOption->setOrder($sortOrder);
        $this->assertSame($sortOrder, $pageOption->getOrder());
    }
}
