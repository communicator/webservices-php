<?php

/*
 * CommunicatorCorp\Communicator
 *
 * Copyright © 2015 Rippleffect Studio Ltd
 * Rights reserved.
 */

namespace CommunicatorCorp\Client\ObjectDefinition;

/**
 * Extract job object definition.
 *
 * @method $this  setId(int $id)
 * @method $this  setDispatchId(int $dispatchId)
 * @method $this  setType(string $jobType)
 * @method $this  setJobStatus(string $jobStatus)
 * @method $this  setFileName(string $fileName)
 * @method $this  setExtractionScope(string $extractionScope)
 * @method $this  setCompressFile(bool $compressFile)
 * @method $this  setEncodeAsUTF8(bool $encodeAsUtf8)
 * @method $this  setLastId(int $lastId)
 * @method $this  setRetrieveDeltas(bool $retrieveDeltas)
 * @method $this  setUsedDispatchedData(bool $useDispatchedData)
 * @method $this  setExtractColumns(array $extractColumns)
 * @method int    getId()
 * @method int    getDispatchId()
 * @method string getType()
 * @method string getFileName()
 * @method string getExtractionScope()
 * @method bool   getCompressFile()
 * @method bool   getEncodeAsUTF8()
 * @method int    getLastId()
 * @method bool   getRetrieveDeltas()
 * @method bool   getUseDispatchData()
 * @method array  getExtractColumns()
 *
 * @package CommunicatorCorp\Client
 * @author  Daniel Morris <daniel@rippleffect.com>
 */
class ExtractJob extends AbstractObjectDefinition
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
            'DispatchId',
            'Type',
            'JobStatus',
            'FileName',
            'ExtractionScope',
            'CompressFile',
            'EncodeAsUTF8',
            'LastId',
            'RetrieveDeltas',
            'UseDispatchedData',
            'ExtractColumns',
        ];
    }
}
