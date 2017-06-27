<?php

/*
 * CommunicatorCorp\Client
 *
 * Copyright © 2015 Rippleffect Studio Ltd
 * Rights reserved.
 */

namespace CommunicatorCorp\Client\ObjectDefinition;

/**
 * `OperatorInfo` object definition.
 *
 * @method $this  setId(int $id)
 * @method $this  setName(string $name)
 * @method $this  setDescription(string $description)
 * @method $this  setOrder(int $order)
 * @method int    getId()
 * @method string getName()
 * @method string getDescription()
 * @method int    getOrder()
 *
 * @package CommunicatorCorp\Client
 * @author  Daniel Morris <daniel@rippleffect.com>
 */
class OperatorInfo extends AbstractObjectDefinition
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
            'Order',
        ];
    }
}
