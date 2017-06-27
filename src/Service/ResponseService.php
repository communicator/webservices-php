<?php

/*
 * CommunicatorCorp\Client
 *
 * Copyright © 2015 Rippleffect Studio Ltd
 * Rights reserved.
 *
 * PHP version 5.4+
 */

namespace CommunicatorCorp\Client\Service;

use CommunicatorCorp\Client\ObjectDefinition\Dispatch;
use CommunicatorCorp\Client\ObjectDefinition\EmailDispatch;
use CommunicatorCorp\Client\ObjectDefinition\EmailDispatchClickStatistics;
use CommunicatorCorp\Client\ObjectDefinition\EmailDispatchOpenStatistics;
use CommunicatorCorp\Client\ObjectDefinition\EmailDispatchUnsubscribeStatistics;
use CommunicatorCorp\Client\ObjectDefinition\EmailLink;
use CommunicatorCorp\Client\ObjectDefinition\ExtractJob;
use CommunicatorCorp\Client\ObjectDefinition\TextDispatch;

/**
 * The response service
 *
 * @package CommunicatorCorp\Client
 * @author  Daniel Morris <daniel@rippleffect.com>
 */
class ResponseService extends AbstractService
{
    /**
     * {@inheritDoc}
     *
     * @return string
     *
     * @api
     */
    public function getWsdl()
    {
        return 'https://ws.communicatorcorp.com/ResponseService.asmx?wsdl';
    }

    /**
     * Returns an email dispatch
     *
     * @param int $dispatchId The dispatch ID
     *
     * @return EmailDispatch
     *
     * @api
     */
    public function getEmailDispatch($dispatchId)
    {
        return $this->request('getEmailDispatch', ['dispatchId' => $dispatchId]);
    }

    /**
     * Returns an array of email dispatches within a given date range
     *
     * @param string $fromDate From date (YYYY-MM-DDThh:mm:ss)
     * @param string $toDate   To date (YYYY-MM-DDThh:mm:ss)
     *
     * @return EmailDispatch[]
     *
     * @api
     */
    public function getEmailDispatchesWithinDateRange($fromDate, $toDate)
    {
        return $this->request('getEmailDispatchesWithinDateRange', [
            'fromDate' => $fromDate,
            'toDate' => $toDate,
        ]);
    }

    /**
     * Returns all links from an email dispatch.
     *
     * @param int $dispatchId The dispatch ID.
     *
     * @return EmailLink[]
     */
    public function getEmailDispatchLinks($dispatchId)
    {
        return $this->request('getEmailDispatchLinks', ['dispatchId' => $dispatchId]);
    }

    /**
     * Returns open statistics for an email dispatch.
     *
     * @param int $dispatchId The dispatch ID.
     *
     * @return EmailDispatchOpenStatistics
     */
    public function getEmailDispatchOpenStatistics($dispatchId)
    {
        return $this->request('getEmailDispatchOpenStatistics', ['dispatchId' => $dispatchId]);
    }

    /**
     * Returns click statistics for an email dispatch.
     *
     * @param int $dispatchId The dispatch ID.
     *
     * @return EmailDispatchClickStatistics
     */
    public function getEmailDispatchClickStatistics($dispatchId)
    {
        return $this->request('getEmailDispatchClickStatistics', ['dispatchId' => $dispatchId]);
    }

    /**
     * Returns unsubscribe statistics for an email dispatch.
     *
     * @param int $dispatchId The dispatch ID.
     *
     * @return EmailDispatchUnsubscribeStatistics
     */
    public function getEmailDispatchUnsubscribeStatistics($dispatchId)
    {
        return $this->request('getEmailDispatchUnsubscribeStatistics', ['dispatchId' => $dispatchId]);
    }

    /**
     * Returns bounce statistics for an email dispatch.
     *
     * @param int $dispatchId The dispatch ID.
     *
     * @return EmailDispatchOpenStatistics
     */
    public function getEmailDispatchBounceStatistics($dispatchId)
    {
        return $this->request('getEmailDispatchBounceStatistics', ['dispatchId' => $dispatchId]);
    }

    /**
     * Creates a new request to extract data.
     *
     * @param ExtractJob $extractJob The extract job to create.
     *
     * @return ExtractJob
     */
    public function createDispatchDataExtractJob(ExtractJob $extractJob)
    {
        return $this->request('createDispatchDataExtractJob', ['extractJob' => $extractJob]);
    }

    /**
     * Returns a text dispatch.
     *
     * @param int $textDispatchId The text dispatch ID.
     *
     * @return TextDispatch
     */
    public function getTextDispatch($textDispatchId)
    {
        return $this->request('getTextDispatch', ['textDispatchId' => $textDispatchId]);
    }

    /**
     * Returns an array of email dispatches within a given date range.
     *
     * @param string $fromDate   From date (YYYY-MM-DDThh:mm:ss).
     * @param string $toDate     To date (YYYY-MM-DDThh:mm:ss).s
     * @param int    $startIndex The starting index.
     *
     * @return Dispatch[]
     */
    public function getDispatchesWithinDateRange($fromDate, $toDate, $startIndex = 0)
    {
        return $this->request('getDispatchesWithinDateRange', [
            'fromDate' => $fromDate,
            'toDate' => $toDate,
            'startIndex' => $startIndex,
        ]);
    }
}
