<?php

/*
 * CommunicatorCorp\Client
 *
 * Copyright © 2015 Rippleffect Studio Ltd
 * Rights reserved.
 *
 * PHP version 5.4+
 */

namespace CommunicatorCorp\Client\ObjectDefinition;

/**
 * Subscription info object definition
 *
 * @method $this     setMailingListId(int $mailingListId)
 * @method $this     setIsSubscribed(bool $isSubscribed)
 * @method $this     setDateLastAction(\DateTime $dateLastAction)
 * @method $this     setSubscriptionSourceType(string $subscriptionSourceType)
 * @method int       getMailingListId()
 * @method bool      getIsSubscribed()
 * @method \DateTime getDateLastAction()
 * @method string    getSubscriptionSourceType()
 *
 * @package CommunicatorCorp\Client
 * @author  Daniel Morris <daniel@rippleffect.com>
 */
class SubscriptionInfo extends AbstractObjectDefinition
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
            'IsSubscribed',
            'DateLastAction',
            'SubscriptionSourceType',
        ];
    }
}
