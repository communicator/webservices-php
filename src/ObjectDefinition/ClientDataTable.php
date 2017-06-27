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
 * Object definition for a client data table
 *
 * @method $this  setId(int $id)
 * @method $this  setJoinType(string $joinType)
 * @method int    getId()
 * @method string getJoinType()
 *
 * @package CommunicatorCorp\Client
 * @author  Daniel Morris <daniel@rippleffect.com>
 */
class ClientDataTable extends AbstractObjectDefinition
{
    /**
     * {@inheritDoc}
     *
     * @return array
     */
    public function getMutableProperties()
    {
        return ['Id', 'JoinType'];
    }
}
