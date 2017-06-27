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

use CommunicatorCorp\Client\Service\MessageService;
use CommunicatorCorp\Client\SoapClient\SoapClientBuilder;
use CommunicatorCorp\Client\SoapClient\SoapHeaderBuilder;
use CommunicatorCorp\Client\ObjectDefinition\CommunicatorCredentials;

/**
 * Tests the `MessageService` class
 *
 * @package CommunicatorCorp\Client
 * @author  Daniel Morris <daniel@rippleffect.com>
 */
class MessageServiceTest extends ServiceTest
{
    /**
     * Tests that the correct URI is returned for the WSDL
     *
     * @return void
     */
    public function testGetWsdl()
    {
        $this->assertEquals(
            'https://ws.communicatorcorp.com/MessageService.asmx?wsdl',
            $this->messageService->getWsdl()
        );
    }
}
