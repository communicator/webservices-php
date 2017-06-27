<?php

namespace CommunicatorCorp\Client\ObjectDefinition;

/**
 * `MailingListAnalyticsProvider` object definition.
 *
 * @method $this  setProviderName(string $providerName)
 * @method $this  setTrackedDomains(array $trackedDomains)
 * @method $this  setParameters(array $parameters)
 * @method string getProviderName()
 * @method array  getTrackedDomains()
 * @method array  getParameters()
 *
 * @package CommunicatorCorp\Client
 * @author  Daniel Morris <daniel@rippleffect.com>
 */
class MailingListAnalyticsProvider extends AbstractObjectDefinition
{
    /**
     * {@inheritDoc}
     *
     * @return array
     */
    public function getMutableProperties()
    {
        return array(
            'ProviderName',
            'TrackedDomains',
            'Parameters',
        );
    }
}
