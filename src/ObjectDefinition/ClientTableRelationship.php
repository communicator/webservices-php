<?php

/*
 * CommunicatorCorp\Client
 *
 * Copyright © 2015 Rippleffect Studio Ltd
 * Rights reserved.
 *
 * PHP version 5.4+
 */

namespace CommunicatorCorp\Client\ObjectDefinition;

/**
 * Object definition for a client table relationship
 *
 * @method $this  setId(int $id)
 * @method $this  setAlias(string $alias)
 * @method $this  setPrimaryKeyClientTableColumnId(int $id)
 * @method $this  setPrimaryKeyClientTableId(int $id)
 * @method $this  setForeignKeyClientTableColumnId(int $id)
 * @method $this  setForeignKeyClientTableId(int $id)
 * @method int    getId()
 * @method string getAlias()
 * @method int    getPrimaryKeyClientTableColumnId()
 * @method int    getPrimaryKeyClientTableId()
 * @method int    getForeignKeyClientTableColumnId()
 * @method int    getForeignKeyClientTableId()
 *
 * @package CommunicatorCorp\Client
 * @author  Daniel Morris <daniel@rippleffect.com>
 */
class ClientTableRelationship extends AbstractObjectDefinition
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
            'Alias',
            'PrimaryKeyClientTableColumnId',
            'PrimaryKeyClientTableId',
            'ForeignKeyClientTableColumnId',
            'ForeignKeyClientTableId',
        ];
    }
}
