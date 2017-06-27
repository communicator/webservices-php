<?php

/*
 * CommunicatorCorp\Client
 *
 * Copyright © 2015 Rippleffect Studio Ltd
 * Rights reserved.
 */

namespace CommunicatorCorp\Client\ObjectDefinition;

/**
 * Subscription object definition.
 *
 * @method $this setMailingListId(int $mailingListId)
 * @method $this setSubscribed(bool $subscribed)
 * @method $this setHonourExistingUnsubscribes(bool $honourExistingUnsubscribes)
 * @method int   getMailingListId()
 * @method bool  getSubscribed()
 * @method bool  getHonourExistingUnsubscribes()
 *
 * @package CommunicatorCorp\Client
 * @author  Daniel Morris <daniel@rippleffect.com>
 */
class Subscription extends AbstractObjectDefinition
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
            'Subscribed',
            'HonourExistingUnsubscribes',
        ];
    }
}
