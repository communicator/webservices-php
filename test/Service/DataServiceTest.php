<?php

/*
 * CommunicatorCorp\Client
 *
 * Copyright © 2015 Rippleffect Studio Ltd
 * Rights reserved.
 *
 * PHP version 5.4+
 */

namespace CommunicatorCorp\Client\Test\Service;

use CommunicatorCorp\Client\Service\DataService;
use CommunicatorCorp\Client\SoapClient\SoapClientBuilder;
use CommunicatorCorp\Client\SoapClient\SoapHeaderBuilder;
use CommunicatorCorp\Client\ObjectDefinition\CommunicatorCredentials;

/**
 * Tests the `DataService` class
 *
 * @package CommunicatorCorp\Client
 * @author  Daniel Morris <daniel@rippleffect.com>
 */
class DataServiceTest extends ServiceTest
{
    /**
     * Tests that the correct URI is returned for the WSDL
     *
     * @return void
     */
    public function testGetWsdl()
    {
        $this->assertEquals(
            'https://ws.communicatorcorp.com/DataService.asmx?wsdl',
            $this->dataService->getWsdl()
        );
    }
}
