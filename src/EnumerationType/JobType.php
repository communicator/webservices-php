<?php

/*
 * CommunicatorCorp\Client
 *
 * Copyright © 2015 Rippleffect Studio Ltd
 * Rights reserved.
 */

namespace CommunicatorCorp\Client\EnumerationType;

use MyCLabs\Enum\Enum;

/**
 * Job type enumeration object.
 *
 * @package CommunicatorCorp\Client
 * @author  Daniel Morris
 */
final class JobType extends Enum
{
    /**
     * Represents bounces in the `JobType`.
     *
     * @const string
     */
    const BOUNCES = 'Bounces';

    /**
     * Represents opens in the `JobType`.
     *
     * @const string
     */
    const OPENS = 'Opens';

    /**
     * Represents clicks in the `JobType`.
     *
     * @const string
     */
    const CLICKS = 'Clicks';

    /**
     * Represents conversions in the `JobType`.
     *
     * @const string
     */
    const CONVERSIONS = 'Conversions';

    /**
     * Represents dispatch unsubscribes in the `JobType`.
     *
     * @const string
     */
    const DISPATCH_UNSUBSCRIBES = 'DispatchUnsubscribes';

    /**
     * Represents table data extraction in the `JobType`.
     *
     * @const string
     */
    const TABLE_DATA_EXTRACT = 'TableDataExtract';

    /**
     * Represents mailing list extraction in the `JobType`.
     *
     * @const string
     */
    const MAILING_LIST_EXTRACT = 'MailingListExtract';

    /**
     * Represents sent in the `JobType`.
     *
     * @const string
     */
    const SENT = 'Sent';
}
