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
 * Object definition for client tables
 *
 * @method $this  setId(int $id)
 * @method $this  setName(string $name)
 * @method $this  setDescription(string $description)
 * @method $this  setTableType(string $tableType)
 * @method $this  setNoOfColumns(int $noOfColumns)
 * @method $this  setNoOfSubscriptionLists(int $noOfSubscriptionLists)
 * @method int    getId()
 * @method string getName()
 * @method string getDescription()
 * @method string getTableType()
 * @method int    getNoOfColumns()
 * @method int    getNoOfSubscriptionLists()
 *
 * @package CommunicatorCorp\Client
 * @author  Daniel Morris <daniel@rippleffect.com>
 */
class ClientTable extends AbstractObjectDefinition
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
            'Name',
            'Description',
            'TableType',
            'NoOfColumns',
            'NoOfSubscriptionLists',
        ];
    }
}
