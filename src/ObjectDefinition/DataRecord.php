<?php

/*
 * CommunicatorCorp\Client
 *
 * Copyright © 2015 Rippleffect Studio Ltd
 * Rights reserved.
 */

namespace CommunicatorCorp\Client\ObjectDefinition;

/**
 * Data record object definition.
 *
 * @method $this setColumnMappings(array $columnMappings)
 * @method $this setSubscriptions(array $subscriptions)
 * @method $this setIsGloballyUnsubscribed(bool $isGloballyUnsubscribed)
 * @method array getColumnMappings()
 * @method array getSubscriptions()
 * @method bool  getIsGloballyUnsubscribed()
 *
 * @package CommunicatorCorp\Client
 * @author  Daniel Morris <daniel@rippleffect.com>
 */
class DataRecord extends AbstractObjectDefinition
{
    /**
     * {@inheritDoc}
     *
     * @return array
     */
    public function getMutableProperties()
    {
        return [
            'ColumnMappings',
            'Subscriptions',
            'IsGloballyUnsubscribed',
        ];
    }
}
