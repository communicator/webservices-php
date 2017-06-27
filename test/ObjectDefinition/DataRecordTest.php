<?php

/*
 * CommunicatorCorp\Client
 *
 * Copyright © 2015 Rippleffect Studio Ltd
 * Rights reserved.
 */

namespace CommunicatorCorp\Client\Test\ObjectDefinition;

use CommunicatorCorp\Client\ObjectDefinition\ColumnMapping;
use CommunicatorCorp\Client\ObjectDefinition\DataRecord;
use CommunicatorCorp\Client\ObjectDefinition\Subscription;

/**
 * Tests the `DataRecord` object definition.
 *
 * @package CommunicatorCorp\Client
 * @author  Daniel Morris <daniel@rippleffect.com>
 */
class DataRecordTest extends \PHPUnit_Framework_TestCase
{
    /**
     * Tests the mutators and accessors on the `DataRecord` object definition.
     *
     * @return void
     */
    public function testMutatorsAndAccessors()
    {
        $columnMappings = array(new ColumnMapping());
        $subscriptions = array(new Subscription());

        $dataRecord = new DataRecord();

        $dataRecord->setColumnMappings($columnMappings);
        $this->assertSame($columnMappings, $dataRecord->getColumnMappings());

        $dataRecord->setSubscriptions($subscriptions);
        $this->assertSame($subscriptions, $dataRecord->getSubscriptions());

        $dataRecord->setIsGloballyUnsubscribed(true);
        $this->assertTrue($dataRecord->getIsGloballyUnsubscribed());
    }
}
