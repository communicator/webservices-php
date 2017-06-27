<?php

/*
 * CommunicatorCorp\Client
 *
 * Copyright © 2015 Rippleffect Studio Ltd
 * Rights reserved.
 */

namespace CommunicatorCorp\Client\ObjectDefinition;

/**
 * Data import object definition.
 *
 * @method $this  setRecords(array $records)
 * @method $this  setType(string $type)
 * @method $this  setClientTableId(int $clientTableId)
 * @method $this  setTriggeredDispatches(array $triggeredDispatches)
 * @method array  getRecords()
 * @method string getType()
 * @method int    getClientTableId()
 * @method array  getTriggeredDispatches()
 *
 * @package CommunicatorCorp\Client
 * @author  Daniel Morris <daniel@rippleffect.com>
 */
class DataImport extends AbstractObjectDefinition
{
    /**
     * {@inheritDoc}
     *
     * @return array
     */
    public function getMutableProperties()
    {
        return [
            'Records',
            'Type',
            'ClientTableId',
            'TriggeredDispatches',
        ];
    }
}
