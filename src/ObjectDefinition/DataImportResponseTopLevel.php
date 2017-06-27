<?php

/*
 * CommunicatorCorp\Communicator
 *
 * Copyright © 2015 Rippleffect Studio Ltd
 * Rights reserved.
 */

namespace CommunicatorCorp\Client\ObjectDefinition;

/**
 * `DataImportResponseTopLevel` object definition.
 *
 * @method $this setTopLevelDetail(array $topLevelDetail)
 * @method array getTopLevelDetail()
 *
 * @package CommunicatorCorp\Client
 * @author  Daniel Morris <daniel@rippleffect.com>
 */
class DataImportResponseTopLevel extends AbstractObjectDefinition
{
    /**
     * {@inheritDoc}
     *
     * @return array
     */
    public function getMutableProperties()
    {
        return array(
            'TopLevelDetail',
        );
    }
}
