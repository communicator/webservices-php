<?php

/*
 * CommunicatorCorp\Communicator
 *
 * Copyright © 2015 Rippleffect Studio Ltd
 * Rights reserved.
 */

namespace CommunicatorCorp\Client\ObjectDefinition;

/**
 * `DataImportResponseDetail` object definition.
 *
 * @method $this  setRow(int $row)
 * @method $this  setResult(string $result)
 * @method $this  setResponse(string $response)
 * @method $this  setMappings(array $mappings)
 * @method int    getRow()
 * @method string getResult()
 * @method string getResponse()
 * @method array  getMappings()
 *
 * @package CommunicatorCorp\Client
 * @author  Daniel Morris <daniel@rippleffect.com>
 */
class DataImportResponseDetail extends AbstractObjectDefinition
{
    /**
     * {@inheritDoc}
     *
     * @return array
     */
    public function getMutableProperties()
    {
        return array(
            'Row',
            'Result',
            'Response',
            'Mappings',
        );
    }
}
