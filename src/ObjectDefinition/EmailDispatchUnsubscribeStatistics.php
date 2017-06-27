<?php

/*
 * CommunicatorCorp\Client
 *
 * Copyright © 2015 Rippleffect Studio Ltd
 * Rights reserved.
 */

namespace CommunicatorCorp\Client\ObjectDefinition;

/**
 * Email dispatch unsubscribe statistics object definition.
 *
 * @method $this setTotalClickUnsubscribes(float $totalClickUnsubscribes)
 * @method $this setTotalFeedbackLoopUnsubscribes(int $totalFeedbackLoopUnsubscribes)
 * @method $this setTotalListUnsubscribeUnsubscribes(int $totalListUnsubscribeUnsubscribes)
 * @method $this setTotalReplyUnsubscribes(int $totalReplyUnsubscribes)
 * @method $this setTotalUnsubscribes(int $totalUnsubscribes)
 * @method $this setTotalDCFUnsubscribes(int $totalDCFUnsubscribes)
 * @method float getTotalClickUnsubscribes()
 * @method int   getTotalFeedbackLoopUnsubscribes()
 * @method int   getTotalListUnsubscribeUnsubscribes()
 * @method int   getTotalReplyUnsubscribes()
 * @method int   getTotalUnsubscribes()
 * @method int   getTotalDCFUnsubscribes()
 *
 * @package CommunicatorCorp\Client
 * @author  Daniel Morris <daniel@rippleffect.com>
 */
class EmailDispatchUnsubscribeStatistics extends AbstractObjectDefinition
{
    /**
     * {@inheritDoc}
     *
     * @return array
     */
    public function getMutableProperties()
    {
        return [
            'TotalClickUnsubscribes',
            'TotalFeedbackLoopUnsubscribes',
            'TotalListUnsubscribeUnsubscribes',
            'TotalReplyUnsubscribes',
            'TotalUnsubscribes',
            'TotalDCFUnsubscribes',
        ];
    }
}
