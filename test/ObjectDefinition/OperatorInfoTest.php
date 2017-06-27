<?php

/*
 * CommunicatorCorp\Client
 *
 * Copyright © 2015 Rippleffect Studio Ltd
 * Rights reserved.
 */

namespace CommunicatorCorp\Client\Test\ObjectDefinition;

use CommunicatorCorp\Client\ObjectDefinition\OperatorInfo;

/**
 * Tests the `OperatorInfo` object definition.
 *
 * @package CommunicatorCorp\Client\Test
 * @author  Daniel Morris <daniel@rippleffect.com>
 */
class OperatorInfoTest extends \PHPUnit_Framework_TestCase
{
    /**
     * Tests the mutators and accessors on the `OperatorInfo` object definition.
     *
     * @return void
     */
    public function testMutatorsAndAccessors()
    {
        $operatorInfo = new OperatorInfo();

        $operatorInfo
            ->setId(1)
            ->setName('Name.')
            ->setDescription('Description.')
            ->setOrder(2)
        ;

        $this->assertEquals(1, $operatorInfo->getId());
        $this->assertEquals('Name.', $operatorInfo->getName());
        $this->assertEquals('Description.', $operatorInfo->getDescription());
        $this->assertEquals(2, $operatorInfo->getOrder());
    }
}
