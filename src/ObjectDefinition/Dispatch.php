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
 * Object definition for a dispatch
 *
 * @method $this  setId(int $id)
 * @method $this  setMailingType(string $mailingType)
 * @method $this  setStatus(string $status)
 * @method $this  setDateScheduled(string $dateScheduled)
 * @method $this  setListSize(int $listSize)
 * @method $this  setTotalSuccess(int $totalSuccess)
 * @method $this  setTotalFailed(int $totalFailed)
 * @method $this  setTotalExcluded(int $totalExcluded)
 * @method $this  setIsTest(bool $isTest)
 * @method int    getId()
 * @method string getMailingType()
 * @method string getStatus()
 * @method string getDateScheduled()
 * @method int    getListSize()
 * @method int    getTotalSuccess()
 * @method int    getTotalFailed()
 * @method int    getTotalExcluded()
 * @method bool   getIsTest()
 *
 * @package CommunicatorCorp\Client
 * @author  Daniel Morris <daniel@rippleffect.com>
 */
class Dispatch extends AbstractObjectDefinition
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
            'MailingType',
            'Status',
            'DateScheduled',
            'ListSize',
            'TotalSuccess',
            'TotalFailed',
            'TotalExcluded',
            'IsTest',
        ];
    }
}
