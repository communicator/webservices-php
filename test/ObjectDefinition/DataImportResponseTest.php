<?php

/*
 * CommunicatorCorp\Communicator
 *
 * Copyright © 2015 Rippleffect Studio Ltd
 * Rights reserved.
 */

namespace CommunicatorCorp\Client\ObjectDefinition;

/**
 * Tests the `DataImportResponse` object definition.
 *
 * @package CommunicatorCorp\Client
 * @author  Daniel Morris <daniel@rippleffect.com>
 */
class DataImportResponseTest extends \PHPUnit_Framework_TestCase
{
    /**
     * Tests the accessors on the `DataImportResponse` object definition.
     *
     * @return void
     */
    public function testAccessors()
    {
        $dataImportResponseTopLevel = array(new DataImportResponseTopLevel());
        $dataImportResponseDetail = array(new DataImportResponseDetail());
        $dataImportResponse = new DataImportResponse();

        $dataImportResponse
            ->setImportDetails($dataImportResponseDetail)
            ->setImportTopLevel($dataImportResponseTopLevel)
        ;

        $this->assertSame($dataImportResponseDetail, $dataImportResponse->getImportDetails());
        $this->assertSame($dataImportResponseTopLevel, $dataImportResponse->getImportTopLevel());
    }
}
