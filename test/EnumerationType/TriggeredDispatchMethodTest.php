<?php

/*
 * CommunicatorCorp\Client
 *
 * Copyright © 2015 Rippleffect Studio Ltd
 * Rights reserved.
 */

namespace CommunicatorCorp\Client\Test\EnumerationType;

/**
 * Tests the `TriggeredDispatchMethod` enum.
 *
 * @package CommunicatorCorp\Client
 * @author  Daniel Morris <daniel@rippleffect.com>
 */
class TriggeredDispatchMethodTest extends AbstractTypeTest
{
    /**
     * {@inheritDoc}
     *
     * @return string
     */
    public function getType()
    {
        return 'TriggeredDispatchMethod';
    }

    /**
     * {@inheritDoc}
     *
     * @return array
     */
    public function typeProvider()
    {
        return [
            ['ONLY_SEND_TO_NEW_SUBSCRIBERS', 'OnlySendToNewSubscribers'],
            ['SEND_TO_ALL_SUBSCRIBERS', 'SendToAllSubscribers'],
        ];
    }
}
