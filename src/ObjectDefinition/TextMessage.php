<?php

/*
 * CommunicatorCorp\Communicator
 *
 * Copyright © 2016 Rippleffect Studio Ltd
 * Rights reserved.
 */

namespace CommunicatorCorp\Client\ObjectDefinition;

/**
 * TextMessage object definition.
 *
 * @method $this  setId(int $id)
 * @method $this  setMailingListId(int $mailingListId)
 * @method $this  setName(string $name)
 * @method $this  setDescription(string $description)
 * @method $this  setMessage(string $message)
 * @method int    getId()
 * @method int    getMailingListId()
 * @method string getName()
 * @method string getDescription()
 * @method string getMessage()
 *
 * @package CommunicatorCorp\Client
 * @author  Daniel Morris <daniel@rippleffect.com>
 */
class TextMessage extends AbstractObjectDefinition
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
            'MailingListId',
            'Name',
            'Description',
            'Message',
        ];
    }
}
