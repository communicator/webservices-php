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

use CommunicatorCorp\Client\EnumerationType\SubscriptionType;

/**
 * Object definition for a mailing list
 *
 * @method $this            setId(int $id)
 * @method $this            setName(string $name)
 * @method $this            setDescription(string $description)
 * @method $this            setContactTableId(int $contactTableId)
 * @method $this            setClientDataTable(ClientDataTable $clientDataTable)
 * @method $this            setRelationships(array $relationships)
 * @method $this            setSubscriptionType(SubscriptionType $subscriptionType)
 * @method $this            setFromAddressId(int $addressId)
 * @method $this            setFromName(string $fromName)
 * @method $this            setUnsubscribeLink(string $unsubscribeLink)
 * @method int              getId()
 * @method string           getName()
 * @method string           getDescription()
 * @method int              getContactTableId()
 * @method ClientDataTable  getClientDataTable()
 * @method array            getRelationships()
 * @method SubscriptionType getSubscriptionType()
 * @method string           getFromAddress()
 * @method string           getFromName()
 * @method string           getUnsubscribeLink()
 *
 * @package CommunicatorCorp\Client
 * @author  Daniel Morris <daniel@rippleffect.com>
 */
class MailingList extends AbstractObjectDefinition
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
            'ContactTableId',
            'ClientDataTable',
            'Relationships',
            'SubscriptionType',
            'FromAddressId',
            'FromName',
            'ExternalUnsubscribeLink',
        ];
    }
}
