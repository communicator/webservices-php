<?php

/*
 * CommunicatorCorp\Client
 *
 * Copyright © 2015 Rippleffect Studio Ltd
 * Rights reserved.
 */

namespace CommunicatorCorp\Client\Test\ObjectDefinition;

use CommunicatorCorp\Client\ObjectDefinition\MailingListAnalyticsProvider;
use CommunicatorCorp\Client\ObjectDefinition\MailingListAnalyticsProviderParameter;

/**
 * Tests the `MailingListAnalyticsProvider` object definition.
 *
 * @package CommunicatorCorp\Client\Test
 * @author  Daniel Morris <daniel@rippleffect.com>
 */
class MailingListAnalyticsProviderTest extends \PHPUnit_Framework_TestCase
{
    /**
     * Tests the mutators and accessors on the `MailingListAnalyticsProvider` object definition.
     *
     * @return void
     */
    public function testMutatorsAndAccessors()
    {
        $mailingListAnalyticsProviderParameters = array(new MailingListAnalyticsProviderParameter());
        $domains = array('https://www.rippleffect.com');

        $mailingListAnalyticsProvider = new MailingListAnalyticsProvider();

        $mailingListAnalyticsProvider
            ->setProviderName('Provider.')
            ->setTrackedDomains($domains)
            ->setParameters($mailingListAnalyticsProviderParameters)
        ;

        $this->assertEquals('Provider.', $mailingListAnalyticsProvider->getProviderName());
        $this->assertSame($domains, $mailingListAnalyticsProvider->getTrackedDomains());
        $this->assertSame($mailingListAnalyticsProviderParameters, $mailingListAnalyticsProvider->getParameters());
    }
}
