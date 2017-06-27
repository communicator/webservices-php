<?php

/*
 * CommunicatorCorp\Client
 *
 * Copyright © 2015 Rippleffect Studio Ltd
 * Rights reserved.
 */

namespace CommunicatorCorp\Client\ObjectDefinition;

/**
 * Email dispatch bounce statistics object definition.
 *
 * @method $this setTotalBounces(int $totalBounces)
 * @method $this setTotalContentReputationBounces(int $totalContentReputationBounces)
 * @method $this setTotalHardBounces(int $totalHardBounces)
 * @method $this setTotalSoftBounces(int $totalSoftBounces)
 * @method int   getTotalBounces()
 * @method int   getTotalContentReputationBounces()
 * @method int   getTotalHardBounces()
 * @method int   getTotalSoftBounces()
 *
 * @package CommunicatorCorp\Client\ObjectDefinition
 * @author  Daniel Morris <daniel@rippleffect.com>
 */
class EmailDispatchBounceStatistics extends AbstractObjectDefinition
{
    /**
     * {@inheritDoc}
     *
     * @return array
     */
    public function getMutableProperties()
    {
        return [
            'TotalBounces',
            'TotalContentReputationBounces',
            'TotalHardBounces',
            'TotalSoftBounces',
        ];
    }
}
