<?php

/*
 * CommunicatorCorp\Communicator
 *
 * Copyright © 2015 Rippleffect Studio Ltd
 * Rights reserved.
 */

namespace CommunicatorCorp\Client\ObjectDefinition;

/**
 * Object definition for an extract column.
 *
 * @method $this setColumnId(int $columnId)
 * @method $this setRelationshipId(int $relationshipId)
 * @method int   getColumnId()
 * @method int   getRelationshipId()
 *
 * @package CommunicatorCorp\Client
 * @author  Daniel Morris <daniel@rippleffect.com>
 */
class ExtractColumn extends AbstractObjectDefinition
{
    /**
     * {@inheritDoc}
     *
     * @return array
     */
    public function getMutableProperties()
    {
        return [
            'ColumnId',
            'RelationshipId',
        ];
    }
}
