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
 * Object definition for email detail
 *
 * @method $this  setId(int $id)
 * @method $this  setMailingListId(int $mailingListId)
 * @method $this  setName(string $name)
 * @method $this  setDescription(string $description)
 * @method $this  setDateCreated(string $dateCreated)
 * @method $this  setDateEdited(string $dateEdited)
 * @method int    getId()
 * @method int    getMailingListId()
 * @method string getName()
 * @method string getDescription()
 * @method string getDateCreated()
 * @method string getDateEdited()
 *
 * @package CommunicatorCorp\Client
 * @author  Daniel Morris <daniel@rippleffect.com>
 */
class EmailDetail extends AbstractObjectDefinition
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
            'DateCreated',
            'DateEdited',
        ];
    }
}
