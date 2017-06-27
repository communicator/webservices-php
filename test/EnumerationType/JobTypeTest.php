<?php

/*
 * CommunicatorCorp\Client
 *
 * Copyright © 2015 Rippleffect Studio Ltd
 * Rights reserved.
 */

namespace CommunicatorCorp\Client\Test\EnumerationType;

/**
 * Tests the `JobType` enumeration type.
 *
 * @package CommunicatorCorp\Client\Test
 * @author  Daniel Morris <daniel@rippleffect.com>
 */
class JobTypeTest extends AbstractTypeTest
{
    /**
     * {@inheritDoc}
     *
     * @return string
     */
    public function getType()
    {
        return 'JobType';
    }

    /**
     * {@inheritDoc}
     *
     * @return array
     */
    public function typeProvider()
    {
        return [
            ['BOUNCES', 'Bounces'],
            ['OPENS', 'Opens'],
            ['CLICKS', 'Clicks'],
            ['CONVERSIONS', 'Conversions'],
            ['DISPATCH_UNSUBSCRIBES', 'DispatchUnsubscribes'],
            ['TABLE_DATA_EXTRACT', 'TableDataExtract'],
            ['MAILING_LIST_EXTRACT', 'MailingListExtract'],
            ['SENT', 'Sent'],
        ];
    }
}
