<?php

/*
 * CommunicatorCorp\Client
 *
 * Copyright © 2015 Rippleffect Studio Ltd
 * Rights reserved.
 */

namespace CommunicatorCorp\Client\Test\ObjectDefinition;

use CommunicatorCorp\Client\DateTime\DateTime;
use CommunicatorCorp\Client\EnumerationType\ExtractionScope;
use CommunicatorCorp\Client\EnumerationType\JobStatus;
use CommunicatorCorp\Client\EnumerationType\JobType;
use CommunicatorCorp\Client\EnumerationType\SubscriberSearchType;
use CommunicatorCorp\Client\ObjectDefinition\ExtractColumn;
use CommunicatorCorp\Client\ObjectDefinition\MailingListExtract;

/**
 * Tests the `MailingListExtract` object definition.
 *
 * @package CommunicatorCorp\Client\Test
 * @author  Daniel Morris <daniel@rippleffect.com>
 */
class MailingListExtractTest extends \PHPUnit_Framework_TestCase
{
    /**
     * Tests the mutators and accessors on the `MailingListExtract` object definition.
     *
     * @return void
     */
    public function testMutatorsAndAccessors()
    {
        $mailingListExtract = new MailingListExtract();

        $type = new JobType(JobType::CLICKS);
        $jobStatus = new JobStatus(JobStatus::COMPLETE);
        $subscriberSearchType = new SubscriberSearchType(SubscriberSearchType::ALL);

        $fromDate = new DateTime();
        $toDate = new DateTime();

        $extractionScope = new ExtractionScope(ExtractionScope::EXTENDED);
        $extractColumns = [new ExtractColumn()];

        $mailingListExtract
            ->setId(1)
            ->setType($type)
            ->setJobStatus($jobStatus)
            ->setFileName('File.txt')
            ->setMailingListId(2)
            ->setMailingListFilterId(3)
            ->setSubscriberSearchType($subscriberSearchType)
            ->setFromDate($fromDate)
            ->setToDate($toDate)
            ->setCompressFile(true)
            ->setGetSuppressions(true)
            ->setExtractionScope($extractionScope)
            ->setTimePartSignificant(true)
            ->setEncodeAsUTF8(true)
            ->setRetrieveDeltas(true)
            ->setExtractColumns($extractColumns)
        ;

        $this->assertEquals(1, $mailingListExtract->getId());
        $this->assertEquals(JobType::CLICKS, $mailingListExtract->getType());
        $this->assertEquals(JobStatus::COMPLETE, $mailingListExtract->getJobStatus());
        $this->assertEquals('File.txt', $mailingListExtract->getFileName());
        $this->assertEquals(2, $mailingListExtract->getMailingListId());
        $this->assertEquals(3, $mailingListExtract->getMailingListFilterId());
        $this->assertSame($subscriberSearchType, $mailingListExtract->getSubscriberSearchType());
        $this->assertSame($fromDate, $mailingListExtract->getFromDate());
        $this->assertSame($toDate, $mailingListExtract->getToDate());
        $this->assertTrue($mailingListExtract->getCompressFile());
        $this->assertTrue($mailingListExtract->getGetSuppressions());
        $this->assertEquals(ExtractionScope::EXTENDED, $mailingListExtract->getExtractionScope());
        $this->assertTrue($mailingListExtract->getEncodeAsUTF8());
        $this->assertTrue($mailingListExtract->getTimePartSignificant());
        $this->assertTrue($mailingListExtract->getRetrieveDeltas());
        $this->assertSame($extractColumns, $mailingListExtract->getExtractColumns());
    }
}
