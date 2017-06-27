<?php

/*
 * Communicator\Client
 *
 * Copyright © 2015 Rippleffect Studio Ltd
 * Rights reserved.
 */

namespace CommunicatorCorp\Client\Test\ObjectDefinition;

use CommunicatorCorp\Client\EnumerationType\ParameterType;
use CommunicatorCorp\Client\ObjectDefinition\MailingListAnalyticsProviderParameter;

/**
 * Tests the `MailingListAnalyticsProviderParameter` object definition.
 *
 * @package CommunicatorCorp\Client\Test
 * @author  Daniel Morris <daniel@rippleffect.com>
 */
class MailingListAnalyticsProviderParameterTest extends \PHPUnit_Framework_TestCase
{
    /**
     * Tests the mutators and accessors on the `MailingListAnalyticsProviderParameter` object definition.
     *
     * @return void
     */
    public function testMutatorsAndAccessors()
    {
        $parameterType = new ParameterType(ParameterType::FIXED);

        $mailingListAnalyticsProviderParameter = new MailingListAnalyticsProviderParameter();

        $mailingListAnalyticsProviderParameter
            ->setParameterId(1)
            ->setName('Name.')
            ->setParameterType($parameterType)
            ->setValue('Value.')
        ;

        $this->assertEquals(1, $mailingListAnalyticsProviderParameter->getParameterId());
        $this->assertEquals('Name.', $mailingListAnalyticsProviderParameter->getName());
        $this->assertEquals('Fixed', $mailingListAnalyticsProviderParameter->getParameterType());
        $this->assertEquals('Value.', $mailingListAnalyticsProviderParameter->getValue());
    }
}
