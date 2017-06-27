<?php

/*
 * CommunicatorCorp\Client
 *
 * Copyright © 2015 Rippleffect Studio Ltd
 * Rights reserved.
 */

namespace CommunicatorCorp\Client\ObjectDefinition;

/**
 * Email link object definition.
 *
 * @method $this  setId(int $id)
 * @method $this  setName(string $name)
 * @method $this  setUrl(string $url)
 * @method $this  setTotalClicks(int $totalClicks)
 * @method $this  setTotalUniqueClicks(int $totalUniqueClicks)
 * @method int    getId()
 * @method string getName()
 * @method string getUrl()
 * @method int    getTotalClicks()
 * @method int    getTotalUniqueClicks()
 *
 * @package CommunicatorCorp\Client
 * @author  Daniel Morris <daniel@rippleffect.com>
 */
class EmailLink extends AbstractObjectDefinition
{
    /**
     * {@inheritDoc}
     *
     * @return array
     */
    public function getMutableProperties()
    {
        return [
            'Id',
            'Name',
            'Url',
            'TotalClicks',
            'TotalUniqueClicks',
        ];
    }
}
