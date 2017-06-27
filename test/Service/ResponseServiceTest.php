<?php

/*
 * CommunicatorCorp\Client
 *
 * Copyright © 2015 Rippleffect Studio Ltd
 * Rights reserved.
 *
 * PHP version 5.4+
 */

namespace CommunicatorCorp\Client\Service;

use CommunicatorCorp\Client\SoapClient\SoapClientBuilder;
use CommunicatorCorp\Client\SoapClient\SoapHeaderBuilder;
use CommunicatorCorp\Client\Test\Service\ServiceTest;
use CommunicatorCorp\Client\ObjectDefinition\CommunicatorCredentials;

/**
 * Tests the `ResponseService` class
 *
 * @package CommunicatorCorp\Client
 * @author  Daniel Morris <daniel@rippleffect.com>
 */
class ResponseServiceTest extends ServiceTest
{
    /**
     * Tests that the correct URI is returned for the WSDL
     *
     * @return void
     */
    public function testGetWsdl()
    {
        $this->assertEquals(
            'https://ws.communicatorcorp.com/ResponseService.asmx?wsdl',
            $this->responseService->getWsdl()
        );
    }
}
