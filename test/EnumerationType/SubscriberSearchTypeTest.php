<?php

/*
 * CommunicatorCorp\Client
 *
 * Copyright © 2015 Rippleffect Studio Ltd
 * Rights reserved.
 *
 * PHP version 5.4+
 */

namespace CommunicatorCorp\Client\Test\EnumerationType;

/**
 * Tests the `SubscriberSearchType` enumeration object
 *
 * @package CommunicatorCorp\Client\Test\Enum
 * @author  Daniel Morris <daniel@rippleffect.com>
 */
class SubscriberSearchTypeTest extends AbstractTypeTest
{
    /**
     * {@inheritDoc}
     *
     * @return string
     */
    public function getType()
    {
        return 'SubscriberSearchType';
    }

    /**
     * {@inheritDoc}
     *
     * @return array
     */
    public function typeProvider()
    {
        return [
            ['ALL', 'All'],
            ['ONLY_SUBSCRIBED', 'OnlySubscribed'],
            ['ONLY_EXPLICITLY_UNSUBSCRIBED', 'OnlyExplicitlyUnsubscribed'],
        ];
    }
}
