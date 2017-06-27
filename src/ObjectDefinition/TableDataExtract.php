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
 * Table data extract object definition.
 *
 * @method $this           setId(int $id)
 * @method $this           setType(JobType $jobType)
 * @method $this           setJobStatus(JobStatus $jobStatus)
 * @method $this           setFileName(string $fileName)
 * @method $this           setTableId(int $tableId)
 * @method $this           setExternalInsertUpdatesOnly(bool $externalInsertUpdatesOnly)
 * @method $this           setFromDate(DateTime $fromDate)
 * @method $this           setToDate(DateTime $toDate)
 * @method $this           setCompressFile(bool $compressFile)
 * @method $this           setGetSuppressions(bool $getSuppressions)
 * @method $this           setExtractionScope(ExtractionScope $extractionScope)
 * @method $this           setEncodeAsUTF8(bool $encodeAsUTF8)
 * @method $this           setTimePartSignificant(bool $timePartSignificant)
 * @method $this           setRetrieveDeltas(bool $retrieveDeltas)
 * @method $this           setExtractColumns(array $extractColumns)
 * @method int             getId()
 * @method JobType         getType()
 * @method JobStatus       getJobStatus()
 * @method string          getFileName()
 * @method int             getTableId()
 * @method bool            getExternalInsertUpdatesOnly()
 * @method DateTime        getFromDate()
 * @method DateTime        getToDate()
 * @method bool            getCompressFile()
 * @method bool            getGetSuppressions()
 * @method ExtractionScope getExtractionScope()
 * @method bool            getEncodeAsUTF8()
 * @method bool            getTimePartSignificant()
 * @method bool            getRetrieveDeltas()
 * @method ExtractColumn[] getExtractColumns()
 *
 * @package CommunicatorCorp\Client
 * @author  Daniel Morris <daniel@rippleffect.com>
 */
class TableDataExtract extends AbstractObjectDefinition
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
            'Type',
            'JobStatus',
            'FileName',
            'TableId',
            'ExternalInsertUpdatesOnly',
            'FromDate',
            'ToDate',
            'CompressFile',
            'GetSuppressions',
            'ExtractionScope',
            'EncodeAsUTF8',
            'TimePartSignificant',
            'RetrieveDeltas',
            'ExtractColumns',
        ];
    }
}
