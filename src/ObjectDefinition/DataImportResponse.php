<?php

/*
 * CommunicatorCorp\Communicator
 *
 * Copyright © 2015 Rippleffect Studio Ltd
 * Rights reserved.
 */

namespace CommunicatorCorp\Client\ObjectDefinition;

/**
 * `DataImportResponse` object definition.
 *
 * @method $this setImportDetails(array $importDetails)
 * @method $this setImportTopLevel(array $importTopLevel)
 * @method array getImportDetails()
 * @method array getImportTopLevel()
 *
 * @package CommunicatorCorp\Client
 * @author  Daniel Morris <daniel@rippleffect.com>
 */
class DataImportResponse extends AbstractObjectDefinition
{
    /**
     * {@inheritDoc}
     *
     * @return array
     */
    public function getMutableProperties()
    {
        return array(
            'ImportDetails',
            'ImportTopLevel',
        );
    }
}
