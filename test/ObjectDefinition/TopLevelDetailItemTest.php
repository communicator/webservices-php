<?php

/*
 * CommunicatorCorp\Communicator
 *
 * Copyright © 2015 Rippleffect Studio Ltd
 * Rights reserved.
 */

namespace CommunicatorCorp\Client\Test\ObjectDefinition;

use CommunicatorCorp\Client\EnumerationType\ImportResult;
use CommunicatorCorp\Client\ObjectDefinition\TopLevelDetailItem;

/**
 * Tests the `TopLevelDetailItem` object definition.
 *
 * @package CommunicatorCorp\Client\Test
 * @author  Daniel Morris <daniel@rippleffect.com>
 */
class TopLevelDetailItemTest extends \PHPUnit_Framework_TestCase
{
    /**
     * Tests the accessors on the `TopLevelDetailItem` object definition.
     *
     * @return void
     */
    public function testAccessors()
    {
        $topLevelDetailItem = new TopLevelDetailItem();

        $topLevelDetailItem
            ->setImportResultType(ImportResult::SUCCESS_INSERTING)
            ->setImportResultCount(10)
        ;

        $this->assertEquals(ImportResult::SUCCESS_INSERTING, $topLevelDetailItem->getImportResultType());
        $this->assertEquals(10, $topLevelDetailItem->getImportResultCount());
    }
}
