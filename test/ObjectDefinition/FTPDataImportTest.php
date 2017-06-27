<?php

/*
 * CommunicatorCorp\Client
 *
 * Copyright © 2015 Rippleffect Studio Ltd
 * Rights reserved.
 */

namespace CommunicatorCorp\Client\Test\ObjectDefinition;

use CommunicatorCorp\Client\EnumerationType\DataImportStatus;
use CommunicatorCorp\Client\EnumerationType\DataImportUpdateMethod;
use CommunicatorCorp\Client\ObjectDefinition\DataImportSubscription;
use CommunicatorCorp\Client\ObjectDefinition\FTPDataImport;
use CommunicatorCorp\Client\ObjectDefinition\Subscription;
use CommunicatorCorp\Client\ObjectDefinition\TriggeredDispatch;

/**
 * Tests the `FTPDataImport` object definition.
 *
 * @package CommunicatorCorp\Client\Test
 * @author  Daniel Morris <daniel@rippleffect.com>
 */
class FTPDataImportTest extends \PHPUnit_Framework_TestCase
{
    /**
     * Tests the mutators and accessors on the `FTPDataImport` object definition.
     *
     * @return void
     */
    public function testMutatorsAndAccessors()
    {
        $dataImportUpdateMethod = new DataImportUpdateMethod(DataImportUpdateMethod::INSERT);
        $subscriptions = [new DataImportSubscription()];
        $triggeredDispatches = [new TriggeredDispatch()];
        $status = new DataImportStatus(DataImportStatus::COMPLETE);

        $ftpDataImport = new FTPDataImport();

        $ftpDataImport
            ->setId(1)
            ->setClientTableId(2)
            ->setType($dataImportUpdateMethod)
            ->setFilename('filename.txt')
            ->setDelimiter(',')
            ->setFormatDate('dd-MM-yyyy')
            ->setSubscriptions($subscriptions)
            ->setTriggeredDispatches($triggeredDispatches)
            ->setStatus($status)
            ->setTotalSuccess(3)
            ->setTotalFailed(4)
            ->setRecordCount(5)
        ;

        $this->assertEquals(1, $ftpDataImport->getId());
        $this->assertEquals(2, $ftpDataImport->getClientTableId());
        $this->assertEquals('Insert', $ftpDataImport->getType());
        $this->assertEquals('filename.txt', $ftpDataImport->getFilename());
        $this->assertEquals(',', $ftpDataImport->getDelimiter());
        $this->assertEquals('dd-MM-yyyy', $ftpDataImport->getFormatDate());
        $this->assertEquals($subscriptions, $ftpDataImport->getSubscriptions());
        $this->assertEquals($triggeredDispatches, $ftpDataImport->getTriggeredDispatches());
        $this->assertEquals('Complete', $ftpDataImport->getStatus());
        $this->assertEquals(3, $ftpDataImport->getTotalSuccess());
        $this->assertEquals(4, $ftpDataImport->getTotalFailed());
        $this->assertEquals(5, $ftpDataImport->getRecordCount());
    }
}
