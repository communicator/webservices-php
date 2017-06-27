<?php

/*
 * CommunicatorCorp\Communicator
 *
 * Copyright © 2015 Rippleffect Studio Ltd
 * Rights reserved.
 */

namespace CommunicatorCorp\Client\ObjectDefinition;

/**
 * Email dispatch open statistics object definition.
 *
 * @method $this setAverageOpensPerRecipient(float $averageOpensPerRecipient)
 * @method $this setTotalClicks(int $totalClicks)
 * @method $this setTotalRegularClicks(int $totalRegularClicks)
 * @method $this setTotalUniqueClicks(int $totalUniqueClicks)
 * @method $this setTotalUnsubscribeClicks(int $totalUnsubscribeClicks)
 * @method $this setTotalWebViewClicks(int $totalWebViewClicks)
 * @method float getAverageOpensPerRecipient()
 * @method int   getTotalClicks()
 * @method int   getTotalRegularClicks()
 * @method int   getTotalUniqueClicks()
 * @method int   getTotalUnsubscribeClicks()
 * @method int   getTotalWebViewClicks()
 *
 * @package CommunicatorCorp\Client
 * @author  Daniel Morris <daniel@rippleffect.com>
 */
class EmailDispatchOpenStatistics extends AbstractObjectDefinition
{
    /**
     * {@inheritDoc}
     *
     * @return array
     */
    public function getMutableProperties()
    {
        return [
            'AverageOpensPerRecipient',
            'TotalClicks',
            'TotalRegularClicks',
            'TotalUniqueClicks',
            'TotalUnsubscribeClicks',
            'TotalWebViewClicks',
        ];
    }
}
