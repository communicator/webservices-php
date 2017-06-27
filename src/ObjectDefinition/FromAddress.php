<?php

/**
 * CommunicatorCorp\Client
 *
 * Copyright © 2015 Rippleffect Studio Ltd
 * Rights reserved.
 *
 * PHP version 5.4+
 */

namespace CommunicatorCorp\Client\ObjectDefinition;

/**
 * Object definition for a from address
 *
 * @method $this  setId(int $id)
 * @method $this  setDescription(string $description)
 * @method $this  setEmailAddress(string $emailAddress)
 * @method int    getId()
 * @method string getDescription()
 * @method string getEmailAddress()
 *
 * @package CommunicatorCorp\Client
 * @author  Daniel Morris <daniel@rippleffect.com>
 */
class FromAddress extends AbstractObjectDefinition
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
            'Description',
            'EmailAddress',
        ];
    }
}
