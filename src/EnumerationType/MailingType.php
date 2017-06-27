<?php

/*
 * CommunicatorCorp\Client
 *
 * Copyright © 2015 Rippleffect Studio Ltd
 * Rights reserved.
 *
 * PHP version 5.4+
 */

namespace CommunicatorCorp\Client\EnumerationType;

use MyCLabs\Enum\Enum;

/**
 * Mailing type enumeration object
 *
 * @package CommunicatorCorp\Client
 * @author  Daniel Morris <daniel@rippleffect.com>
 */
final class MailingType extends Enum
{
    /**
     * Represents an email column in the `MailingType`
     *
     * @const string
     */
    const EMAIL = 'Email';

    /**
     * Represents an SMS column in the `MailingType`
     *
     * @const string
     */
    const SMS = 'Sms';
}
