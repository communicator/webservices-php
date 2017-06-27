<?php

/*
 * CommunicatorCorp\Client
 *
 * Copyright © 2015 Rippleffect Studio Ltd
 * Rights reserved.
 */

namespace CommunicatorCorp\Client\Test\ObjectDefinition;

use CommunicatorCorp\Client\EnumerationType\DataImportUpdateMethod;
use CommunicatorCorp\Client\ObjectDefinition\DataImport;
use CommunicatorCorp\Client\ObjectDefinition\DataRecord;
use CommunicatorCorp\Client\ObjectDefinition\TriggeredDispatch;

/**
 * Tests the `DataImport` object definition.
 *
 * @package CommunicatorCorp\Client
 * @author  Daniel Morris <daniel@rippleffect.com>
 */
class DataImportTest extends \PHPUnit_Framework_TestCase
{
    /**
     * Tests the mutators and accessors on the `DataImport` object definition.
     *
     * @return void
     */
    public function testMutatorsAndAccessors()
    {
        $triggeredDispatches = array(new TriggeredDispatch());
        $records = array(new DataRecord());

        $dataImport = new DataImport();

        $dataImport->setRecords($records);
        $this->assertSame($records, $dataImport->getRecords());

        $dataImport->setType(DataImportUpdateMethod::INSERT);
        $this->assertEquals(DataImportUpdateMethod::INSERT, $dataImport->getType());

        $dataImport->setClientTableId(1);
        $this->assertEquals(1, $dataImport->getClientTableId());

        $dataImport->setTriggeredDispatches($triggeredDispatches);
        $this->assertEquals($triggeredDispatches, $dataImport->getTriggeredDispatches());
    }
}
