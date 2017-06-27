<?php

/*
 * CommunicatorCorp\Client
 *
 * Copyright © 2015 Rippleffect Studio Ltd
 * Rights reserved.
 */

namespace CommunicatorCorp\Client\ObjectDefinition;

use CommunicatorCorp\Client\EnumerationType\ControlCommand;

/**
 * Control object definition.
 *
 * @method $this          setId(int $id)
 * @method $this          setCommand(ControlCommand $command)
 * @method int            getId()
 * @method ControlCommand getCommand()
 *
 * @package CommunicatorCorp\Client
 * @author  Daniel Morris <daniel@rippleffect.com>
 */
class Control extends AbstractObjectDefinition
{
    /**
     * {@inheritDoc}
     *
     * @return array
     */
    public function getMutableProperties()
    {
        return array(
            'Id',
            'Command',
        );
    }
}
