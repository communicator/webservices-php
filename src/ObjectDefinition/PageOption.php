<?php

/**
 * CommunicatorCorp\Client
 *
 * Copyright © 2015 Rippleffect Studio Ltd
 * Rights reserved.
 *
 * PHP version 5.4+
 */

namespace CommunicatorCorp\Client\ObjectDefinition;

/**
 * Object definition for a page option
 *
 * @method $this  setStartIndex(int $startIndex)
 * @method $this  setPageSize(int $pageSize)
 * @method $this  setOrder(string $order)
 * @method int    getStartIndex()
 * @method int    getPageSize()
 * @method string getOrder()
 *
 * @package CommunicatorCorp\Client
 * @author  Daniel Morris <daniel@rippleffect.com>
 */
class PageOption extends AbstractObjectDefinition
{
    /**
     * {@inheritDoc}
     *
     * @return array
     */
    public function getMutableProperties()
    {
        return ['StartIndex', 'PageSize', 'Order'];
    }
}
