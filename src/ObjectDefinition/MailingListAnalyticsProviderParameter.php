<?php

/*
 * CommunicatorCorp\Client
 *
 * Copyright © 2015 Rippleffect Studio Ltd
 * Rights reserved.
 */

namespace CommunicatorCorp\Client\ObjectDefinition;

use CommunicatorCorp\Client\EnumerationType\ParameterType;

/**
 * `MailingListAnalyticsProviderParameter` object definition.
 *
 * @method $this         setParameterId(int $parameterId)
 * @method $this         setName(string $name)
 * @method $this         setParameterType(ParameterType $parameterType)
 * @method $this         setValue(string $value)
 * @method int           getParameterId()
 * @method string        getName()
 * @method ParameterType getParameterType()
 * @method string        getValue()
 *
 * @package CommunicatorCorp\Client
 * @author  Daniel Morris <daniel@rippleffect.com>
 */
class MailingListAnalyticsProviderParameter extends AbstractObjectDefinition
{
    /**
     * {@inheritDoc}
     *
     * @return array
     */
    public function getMutableProperties()
    {
        return array(
            'ParameterId',
            'Name',
            'ParameterType',
            'Value',
        );
    }
}
