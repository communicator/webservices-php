<?php

/*
 * CommunicatorCorp\Client
 *
 * Copyright © 2015 Rippleffect Studio Ltd
 * Rights reserved.
 *
 * PHP version 5.4+
 */

namespace CommunicatorCorp\Client\ObjectDefinition;

/**
 * Object definition for email dispatch
 *
 * @method $this  setId(int $id)
 * @method $this  setEmailId(int $emailId)
 * @method $this  setMailingListId(int $mailingListId)
 * @method $this  setFilterId(int $filterId)
 * @method $this  setFromName(string $fromName)
 * @method $this  setFromAddress(string $fromAddress)
 * @method $this  setSubjectLine(string $subjectLine)
 * @method $this  setTrackHtmlLinks(bool $trackHtmlLinks)
 * @method $this  setTrackPlainLinks(bool $trackPlainLinks)
 * @method $this  setEnableConversionTracking(bool $enableConversionTracking)
 * @method $this  setEnableAnalytics(bool $enableAnalytics)
 * @method $this  setReplyForwardingAddress(string $replyForwardingAddress)
 * @method $this  setStatus(string $status)
 * @method $this  setIndicatedListSize(int $indicatedListSize)
 * @method $this  setTotalProcessed(int $totalProcessed)
 * @method $this  setTotalSuccess(int $totalSuccess)
 * @method $this  setTotalFailed(int $totalFailed)
 * @method $this  setScheduledDate(string $scheduledDate)
 * @method $this  setTimeZone(string $timeZone)
 * @method $this  setDateStarted(string $dateStarted)
 * @method $this  setDateCompleted(string $dateCompleted)
 * @method $this  setCreatedBy(string $createdBy)
 * @method $this  setDateCreated(string $dateCreated)
 * @method $this  setLastAuthorisedBy(string $lastAuthorisedBy)
 * @method $this  setLastAuthorisedDate(string $lastAuthorisedDate)
 * @method $this  setIsTriggeredDispatch(bool $isTriggeredDispatch)
 * @method int    getId()
 * @method int    getEmailId()
 * @method int    getMailingListId()
 * @method int    getFilterId()
 * @method string getFromName()
 * @method string getFromAddress()
 * @method string getSubjectLine()
 * @method bool   getTrackHtmlLinks()
 * @method bool   getTrackPlainLinks()
 * @method bool   getEnableConversionTracking()
 * @method bool   getEnableAnalytics()
 * @method string getReplyForwardingAddress()
 * @method string getStatus()
 * @method int    getIndicatedListSize()
 * @method int    getTotalProcessed()
 * @method int    getTotalSuccess()
 * @method int    getTotalFailed()
 * @method string getScheduledDate()
 * @method string getTimeZone()
 * @method string getDateStarted()
 * @method string getDateCompleted()
 * @method string getCreatedBy()
 * @method string getDateCreated()
 * @method string getLastAuthorisedBy()
 * @method string getLastAuthorisedDate()
 * @method bool   getIsTriggeredDispatch()
 *
 * @package CommunicatorCorp\Client
 * @author  Daniel Morris <daniel@rippleffect.com>
 */
class EmailDispatch extends AbstractObjectDefinition
{
    /**
     * {@inheritDoc}
     *
     * @return array
     */
    public function getMutableProperties()
    {
        return [
            'Id',
            'EmailId',
            'MailingListId',
            'FilterId',
            'FromName',
            'FromAddress',
            'SubjectLine',
            'TrackHtmlLinks',
            'TrackPlainLinks',
            'EnableConversionTracking',
            'EnableAnalytics',
            'ReplyForwardingAddress',
            'Status',
            'IndicatedListSize',
            'TotalProcessed',
            'TotalSuccess',
            'TotalFailed',
            'ScheduledDate',
            'TimeZone',
            'DateStarted',
            'DateCompleted',
            'CreatedBy',
            'DateCreated',
            'LastAuthorisedBy',
            'LastAuthorisedDate',
            'IsTriggeredDispatch',
        ];
    }
}
