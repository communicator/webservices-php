<?php

/*
 * CommunicatorCorp\Communicator
 *
 * Copyright © 2015 Rippleffect Studio Ltd
 * Rights reserved.
 */

namespace CommunicatorCorp\Client\Test\ObjectDefinition;

use CommunicatorCorp\Client\EnumerationType\ImportResult;
use CommunicatorCorp\Client\ObjectDefinition\ColumnMapping;
use CommunicatorCorp\Client\ObjectDefinition\DataImportResponseDetail;

/**
 * Tests the `DataImportResponseDetail` object definition.
 *
 * @package CommunicatorCorp\Client\Test\ObjectDefinition
 * @author  Daniel Morris <daniel@rippleffect.com>
 */
class DataImportResponseDetailTest extends \PHPUnit_Framework_TestCase
{
    /**
     * Tests the accessors of the `DataImportResponseDetail` object definition.
     *
     * @return void
     */
    public function testAccessors()
    {
        $columnMappings = array(new ColumnMapping());
        $dataImportResponseDetail = new DataImportResponseDetail();

        $dataImportResponseDetail
            ->setRow(1)
            ->setResult(ImportResult::SUCCESS_INSERTING)
            ->setResponse('Import success.')
            ->setMappings($columnMappings)
        ;

        $this->assertEquals(1, $dataImportResponseDetail->getRow());
        $this->assertEquals(ImportResult::SUCCESS_INSERTING, $dataImportResponseDetail->getResult());
        $this->assertEquals('Import success.', $dataImportResponseDetail->getResponse());
        $this->assertSame($columnMappings, $dataImportResponseDetail->getMappings());
    }
}
