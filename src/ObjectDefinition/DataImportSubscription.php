<?php

/*
 * CommunicatorCorp\Client
 *
 * Copyright © 2015 Rippleffect Studio Ltd
 * Rights reserved.
 */

namespace CommunicatorCorp\Client\ObjectDefinition;

use CommunicatorCorp\Client\EnumerationType\SubscriptionUpdateMethod;

/**
 * Data import subscription object definition.
 *
 * @method $this                    setMailingListId(int $mailingListId)
 * @method $this                    setSubscriptionMethod(SubscriptionUpdateMethod $subscriptionUpdateMethod)
 * @method int                      getMailingListId()
 * @method SubscriptionUpdateMethod getSubscriptionMethod()
 *
 * @package CommunicatorCorp\Client
 * @author  Daniel Morris <daniel@rippleffect.com>
 */
class DataImportSubscription extends AbstractObjectDefinition
{
    /**
     * {@inheritDoc}
     *
     * @return array
     */
    public function getMutableProperties()
    {
        return [
            'MailingListId',
            'SubscriptionMethod',
        ];
    }
}
