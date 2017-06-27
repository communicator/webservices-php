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

use CommunicatorCorp\Client\ObjectDefinition\CommunicatorCredentials;
use CommunicatorCorp\Client\Response\AbstractIterableResponse;
use CommunicatorCorp\Client\Response\AbstractResponse;
use RuntimeException;
use SoapClient;
use SoapHeader;

/**
 * Abstract service class
 *
 * @package CommunicatorCorp\Client
 * @author  Daniel Morris <daniel@rippleffect.com>
 */
abstract class AbstractService extends SoapClient implements ServiceInterface
{
    use ClassmapTrait;

    /**
     * The request registry.
     *
     * @var array
     */
    private $requestRegistry = [];

    /**
     * `CommunicatorCredentials` object definition
     *
     * @var CommunicatorCredentials
     */
    protected $communicatorCredentials;

    /**
     * {@inheritDoc}
     *
     * @return string
     */
    abstract public function getWsdl();

    /**
     * Instantiates the service
     *
     * @param CommunicatorCredentials $communicatorCredentials Communicator credentials object definition
     * @param array|int               $soapVersion             The SOAP version that should be used.
     * @param bool                    $trace                   Whether or not to enable tracing.
     */
    public function __construct(CommunicatorCredentials $communicatorCredentials, $soapVersion = SOAP_1_2, $trace = false)
    {
        $this->setCommunicatorCredentials($communicatorCredentials);

        parent::__construct($this->getWsdl(), array(
            'classmap'     => $this->getClassmap(),
            'soap_version' => $soapVersion,
            'trace'        => $trace,
        ));

        $header = $this->createSoapHeaderWithCommunicatorCredentials($communicatorCredentials);

        $this->__setSoapHeaders($header);
    }

    /**
     * {@inheritDoc}
     *
     * @return string
     *
     * @api
     */
    public function getNamespace()
    {
        return 'http://ws.communicatorcorp.com/';
    }

    /**
     * Sets the credentials on the service
     *
     * @param CommunicatorCredentials $communicatorCredentials
     *
     * @return void
     *
     * @api
     */
    public function setCommunicatorCredentials(CommunicatorCredentials $communicatorCredentials)
    {
        $this->communicatorCredentials = $communicatorCredentials;
    }

    /**
     * Returns the `CommunicatorCredentials` object
     *
     * @return CommunicatorCredentials
     *
     * @api
     */
    public function getCommunicatorCredentials()
    {
        return $this->communicatorCredentials;
    }

    /**
     * Performs a request on the current service.
     *
     * If multiple requests are made with the same arguments, this method will
     * return a cached copy of the request to avoid hitting the API.
     *
     * @param string $method    The remote method name
     * @param array  $arguments The arguments passed to the method
     *
     * @return AbstractResponse|AbstractIterableResponse
     *
     * @throws RuntimeException
     */
    protected function request($method, array $arguments = [])
    {
        $requestSignature = md5(serialize([$method, $arguments]));

        if (isset($this->requestRegistry[$requestSignature])) {
            return $this->requestRegistry[$requestSignature];
        }

        /** @var AbstractIterableResponse|AbstractResponse $response */
        $response = $this->__call($method, [$arguments]);

        if ($response instanceof AbstractIterableResponse) {
            $response = $response
                ->{$response->getResultObjectProperty()}
                ->{$response->getObjectDefinitionProperty()}
            ;
        } elseif ($response instanceof AbstractResponse) {
            $response = $response->{$response->getResultObjectProperty()};
        } else {
            throw new RuntimeException('No appropriate response object found.');
        }

        $this->requestRegistry[$requestSignature] = $response;

        return $response;
    }

    /**
     * Creates and returns a `SoapHeader` populated with the Communicator API credentials.
     *
     * @param CommunicatorCredentials $communicatorCredentials The Communicator API credentials.
     *
     * @return SoapHeader
     */
    protected function createSoapHeaderWithCommunicatorCredentials(CommunicatorCredentials $communicatorCredentials)
    {
        $header = new SoapHeader(
            $this->getNamespace(),
            'CommunicatorCredentials',
            array(
                'Username' => $communicatorCredentials->getUsername(),
                'Password' => $communicatorCredentials->getPassword(),
            )
        );

        return $header;
    }
}
