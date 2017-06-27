<?php

/*
 * CommunicatorCorp\Communicator
 *
 * Copyright © 2015 Rippleffect Studio Ltd
 * Rights reserved.
 */

namespace CommunicatorCorp\Client\Test\ObjectDefinition;

use CommunicatorCorp\Client\ObjectDefinition\DataImportResponseTopLevel;
use CommunicatorCorp\Client\ObjectDefinition\TopLevelDetailItem;

/**
 * Tests the `DataImportResponseTopLevel` object definition.
 *
 * @package CommunicatorCorp\Client\Test
 * @author  Daniel Morris <daniel@rippleffect.com>
 */
class DataImportResponseTopLevelTest extends \PHPUnit_Framework_TestCase
{
    /**
     * Tests the accessors on the `DataImportResponseTopLevel` object definition.
     *
     * @return void
     */
    public function testAccessors()
    {
        $topLevelDetailItems = array(new TopLevelDetailItem());
        $dataImportResponseTopLevel = new DataImportResponseTopLevel();

        $dataImportResponseTopLevel->setTopLevelDetail($topLevelDetailItems);

        $this->assertSame($topLevelDetailItems, $dataImportResponseTopLevel->getTopLevelDetail());
    }
}
