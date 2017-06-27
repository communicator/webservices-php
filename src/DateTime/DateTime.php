<?php

/*
 * CommunicatorCorp\Client
 *
 * Copyright © 2015 Rippleffect Studio Ltd
 * Rights reserved.
 */

namespace CommunicatorCorp\Client\DateTime;

/**
 * @package CommunicatorCorp\Client
 * @author  Daniel Morris <daniel@rippleffect.com>
 */
class DateTime extends \DateTime
{
    /**
     * Communicator-specific date format
     *
     * @const string
     */
    const COMMUNICATOR = 'Y-m-d\TH:i:s';

    /**
     * {@inheritDoc}
     *
     * @return string
     */
    public function __toString()
    {
        return $this->format(self::COMMUNICATOR);
    }
}
