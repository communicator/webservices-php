<?php

/*
 * CommunicatorCorp\Client
 *
 * Copyright © 2015 Rippleffect Studio Ltd
 * Rights reserved.
 */

namespace CommunicatorCorp\Client\ObjectDefinition;

/**
 * Object definition for a mailing list filter.
 *
 * @method $this  setId(int $id)
 * @method $this  setName(string $name)
 * @method $this  setDescription(string $description)
 * @method $this  setMailingListId(int $mailingListId)
 * @method $this  setFilterItems(array $filterItems)
 * @method int    getId()
 * @method string getName()
 * @method string getDescription()
 * @method int    getMailingListId()
 * @method array  getFilterItems()
 *
 * @package CommunicatorCorp\Client
 * @author  Daniel Morris <daniel@rippleffect.com>
 */
class MailingListFilter extends AbstractObjectDefinition
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
            'MailingListId',
            'FilterItems',
        ];
    }
}
