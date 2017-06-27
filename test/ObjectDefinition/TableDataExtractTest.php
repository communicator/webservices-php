<?php

/*
 * CommunicatorCorp\Client
 *
 * Copyright © 2015 Rippleffect Studio Ltd
 * Rights reserved.
 */

namespace CommunicatorCorp\Client\ObjectDefinition;

use CommunicatorCorp\Client\DateTime\DateTime;
use CommunicatorCorp\Client\EnumerationType\ExtractionScope;
use CommunicatorCorp\Client\EnumerationType\JobStatus;
use CommunicatorCorp\Client\EnumerationType\JobType;

/**
 * Tests the `TableDataExtract` object definition.
 *
 * @package CommunicatorCorp\Client
 * @author  Daniel Morris <daniel@honestempire.com>
 */
class TableDataExtractTest extends \PHPUnit_Framework_TestCase
{
    /**
     * Tests the mutators and accessors on the `TableDataExtract` object definition.
     *
     * @return void
     */
    public function testMutatorsAndAccessors()
    {
        $tableDataExtract = new TableDataExtract();

        $type = new JobType(JobType::CLICKS);
        $jobStatus = new JobStatus(JobStatus::COMPLETE);

        $fromDate = new DateTime();
        $toDate = new DateTime();

        $extractionScope = new ExtractionScope(ExtractionScope::EXTENDED);
        $extractColumns = [new ExtractColumn()];

        $tableDataExtract
            ->setId(1)
            ->setType($type)
            ->setJobStatus($jobStatus)
            ->setFileName('File.txt')
            ->setTableId(2)
            ->setExternalInsertUpdatesOnly(true)
            ->setFromDate($fromDate)
            ->setToDate($toDate)
            ->setCompressFile(true)
            ->setGetSuppressions(true)
            ->setExtractionScope($extractionScope)
            ->setEncodeAsUTF8(true)
            ->setTimePartSignificant(true)
            ->setRetrieveDeltas(true)
            ->setExtractColumns($extractColumns)
        ;

        $this->assertEquals(1, $tableDataExtract->getId());
        $this->assertEquals(JobType::CLICKS, $tableDataExtract->getType());
        $this->assertEquals(JobStatus::COMPLETE, $tableDataExtract->getJobStatus());
        $this->assertEquals('File.txt', $tableDataExtract->getFileName());
        $this->assertEquals(2, $tableDataExtract->getTableId());
        $this->assertTrue($tableDataExtract->getExternalInsertUpdatesOnly());
        $this->assertSame($fromDate, $tableDataExtract->getFromDate());
        $this->assertSame($toDate, $tableDataExtract->getToDate());
        $this->assertTrue($tableDataExtract->getCompressFile());
        $this->assertTrue($tableDataExtract->getGetSuppressions());
        $this->assertEquals(ExtractionScope::EXTENDED, $tableDataExtract->getExtractionScope());
        $this->assertTrue($tableDataExtract->getEncodeAsUTF8());
        $this->assertTrue($tableDataExtract->getTimePartSignificant());
        $this->assertTrue($tableDataExtract->getRetrieveDeltas());
        $this->assertSame($extractColumns, $tableDataExtract->getExtractColumns());
    }
}
