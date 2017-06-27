<?php

/*
 * CommunicatorCorp\Communicator
 *
 * Copyright © 2015 Rippleffect Studio Ltd
 * Rights reserved.
 */

namespace CommunicatorCorp\Client\ObjectDefinition;

/**
 * `TopLevelDetailItem` object definition.
 *
 * @method $this  setImportResultType(string $importResultType)
 * @method $this  setImportResultCount(int $importResultCount)
 * @method string getImportResultType()
 * @method int    getImportResultCount()
 *
 * @package CommunicatorCorp\Client
 * @author  Daniel Morris <daniel@rippleffect.com>
 */
class TopLevelDetailItem extends AbstractObjectDefinition
{
    /**
     * {@inheritDoc}
     *
     * @return array
     */
    public function getMutableProperties()
    {
        return array(
            'ImportResultType',
            'ImportResultCount',
        );
    }
}
