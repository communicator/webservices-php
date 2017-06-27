<?php

/*
 * CommunicatorCorp\Client
 *
 * Copyright © 2015 Rippleffect Studio Ltd
 * Rights reserved.
 */

namespace CommunicatorCorp\Client\Test\DateTime;

use CommunicatorCorp\Client\DateTime\DateTime;

/**
 * @package CommunicatorCorp\Client\Test\DateTime
 * @author  Daniel Morris <daniel@rippleffect.com>
 */
class DateTimeTest extends \PHPUnit_Framework_TestCase
{
    /**
     * Tests that the DateTime class returns the correct string format
     *
     * @return void
     */
    public function testToString()
    {
        $now = new DateTime();

        $this->assertRegExp('/\d{4}-\d{2}-\d{2}T\d{2}:\d{2}:\d{2}/', (string) $now);
    }
}
