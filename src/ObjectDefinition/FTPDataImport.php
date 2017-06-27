<?php

/*
 * CommunicatorCorp\Client
 *
 * Copyright © 2015 Rippleffect Studio Ltd
 * Rights reserved.
 */

namespace CommunicatorCorp\Client\ObjectDefinition;

use CommunicatorCorp\Client\EnumerationType\DataImportStatus;
use CommunicatorCorp\Client\EnumerationType\DataImportUpdateMethod;

/**
 * FTP data import object definition.
 *
 * @method $this                    setId(int $id)
 * @method $this                    setClientTableId(int $clientTableId)
 * @method $this                    setType(DataImportUpdateMethod $dataImportUpdateMethod)
 * @method $this                    setFilename(string $filename)
 * @method $this                    setDelimiter(string $delimiter)
 * @method $this                    setFormatDate(string $formatDate)
 * @method $this                    setSubscriptions(array $subscriptions)
 * @method $this                    setTriggeredDispatches(array $triggeredDispatches)
 * @method $this                    setStatus(DataImportStatus $dataImportStatus)
 * @method $this                    setTotalSuccess(int $totalSuccess)
 * @method $this                    setTotalFailed(int $totalFailed)
 * @method $this                    setRecordCount(int $recordCount)
 * @method int                      getId()
 * @method int                      getClientTableId()
 * @method DataImportUpdateMethod   getType()
 * @method string                   getFilename()
 * @method string                   getDelimiter()
 * @method string                   getFormateDate()
 * @method DataImportSubscription[] getSubscriptions()
 * @method TriggeredDispatch[]      getTriggeredDispatches()
 * @method DataImportStatus         getStatus()
 * @method int                      getTotalSuccess()
 * @method int                      getTotalFailed()
 * @method int                      getRecordCount()
 *
 * @package CommunicatorCorp\Client
 * @author  Daniel Morris <daniel@rippleffect.com>
 */
class FTPDataImport extends AbstractObjectDefinition
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
            'ClientTableId',
            'Type',
            'Filename',
            'Delimiter',
            'FormatDate',
            'Subscriptions',
            'TriggeredDispatches',
            'Status',
            'TotalSuccess',
            'TotalFailed',
            'RecordCount',
        ];
    }
}
