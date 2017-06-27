<?php

/*
 * CommunicatorCorp\Communicator
 *
 * Copyright © 2015 Rippleffect Studio Ltd
 * Rights reserved.
 */

namespace CommunicatorCorp\Client\Test\ObjectDefinition;

use CommunicatorCorp\Client\EnumerationType\ExtractionScope;
use CommunicatorCorp\Client\EnumerationType\JobStatus;
use CommunicatorCorp\Client\EnumerationType\JobType;
use CommunicatorCorp\Client\ObjectDefinition\ExtractColumn;
use CommunicatorCorp\Client\ObjectDefinition\ExtractJob;

/**
 * Tests the `ExtractJob` object definition.
 *
 * @package CommunicatorCorp\Client
 * @author  Daniel Morris <daniel@rippleffect.com>
 */
class ExtractJobTest extends \PHPUnit_Framework_TestCase
{
    /**
     * Tests the mutators and accessors on the `ExtractJob` object definition.
     *
     * @return void
     */
    public function testMutatorsAndAccessors()
    {
        $extractColumns = array(new ExtractColumn());
        $extractJob = new ExtractJob();

        $extractJob
            ->setId(1)
            ->setDispatchId(2)
            ->setType(JobType::OPENS)
            ->setJobStatus(JobStatus::_NEW)
            ->setFileName('Example.txt')
            ->setExtractionScope(ExtractionScope::EXTENDED)
            ->setCompressFile(true)
            ->setEncodeAsUTF8(true)
            ->setLastId(3)
            ->setRetrieveDeltas(true)
            ->setUseDispatchedData(true)
            ->setExtractColumns($extractColumns)
        ;

        $this->assertEquals(1, $extractJob->getId());
        $this->assertEquals(2, $extractJob->getDispatchId());
        $this->assertEquals(JobType::OPENS, $extractJob->getType());
        $this->assertEquals(JobStatus::_NEW, $extractJob->getJobStatus());
        $this->assertEquals('Example.txt', $extractJob->getFileName());
        $this->assertEquals(ExtractionScope::EXTENDED, $extractJob->getExtractionScope());
        $this->assertTrue($extractJob->getCompressFile());
        $this->assertTrue($extractJob->getEncodeAsUTF8());
        $this->assertEquals(3, $extractJob->getLastId());
        $this->assertTrue($extractJob->getRetrieveDeltas());
        $this->assertTrue($extractJob->getUseDispatchedData());
        $this->assertSame($extractColumns, $extractJob->getExtractColumns());
    }
}
