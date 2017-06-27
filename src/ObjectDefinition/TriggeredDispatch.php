<?php

/*
 * CommunicatorCorp\Client
 *
 * Copyright © 2015 Rippleffect Studio Ltd
 * Rights reserved.
 */

namespace CommunicatorCorp\Client\ObjectDefinition;

/**
 * Triggered dispatch object definition.
 *
 * @method $this  setDispatchId(int $dispatchId)
 * @method $this  setTriggeredDispatchMethod(string $triggeredDispatchMethod)
 * @method int    getDispatchId()
 * @method string getTriggeredDispatchMethod()
 *
 * @package CommunicatorCorp\Client
 * @author  Daniel Morris <daniel@rippleffect.com>
 */
class TriggeredDispatch extends AbstractObjectDefinition
{
    /**
     * {@inheritDoc}
     *
     * @return array
     */
    public function getMutableProperties()
    {
        return [
            'DispatchId',
            'TriggeredDispatchMethod',
        ];
    }
}
