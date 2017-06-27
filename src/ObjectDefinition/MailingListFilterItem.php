<?php

/*
 * CommunicatorCorp\Client
 *
 * Copyright © 2015 Rippleffect Studio Ltd
 * Rights reserved.
 */

namespace CommunicatorCorp\Client\ObjectDefinition;

/**
 * Object definition for a mailing list filter item.
 *
 * @method $this                   setId(int $id)
 * @method $this                   setColumnId(int $columnId)
 * @method $this                   setValue(string $value)
 * @method $this                   setOperatorId(int $operatorId)
 * @method $this                   setCondition(string $condition)
 * @method $this                   setRelationship(ClientTableRelationship $relationship)
 * @method int                     getId()
 * @method int                     getColumnId()
 * @method string                  getValue()
 * @method int                     getOperatorId()
 * @method string                  getCondition()
 * @method ClientTableRelationship getRelationship()
 *
 * @package CommunicatorCorp\Client
 * @author  Daniel Morris <daniel@rippleffect.com>
 */
class MailingListFilterItem extends AbstractObjectDefinition
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
            'ColumnId',
            'Value',
            'OperatorId',
            'Condition',
            'Relationship',
        ];
    }
}
