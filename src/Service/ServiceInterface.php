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

/**
 * Interface for Communicator services
 *
 * Each Communicator service endpoint should have a unique WSDL, services also
 * share a common namespace.
 *
 * @package CommunicatorCorp\Client
 * @author  Daniel Morris <daniel@rippleffect.com>
 */
interface ServiceInterface
{
    /**
     * Returns the namespace for the service
     *
     * @return string
     */
    public function getNamespace();

    /**
     * Returns the WSDL for the formal description of the service
     *
     * @return string
     */
    public function getWsdl();

    /**
     * Returns the classmap
     *
     * @return array
     */
    public function getClassmap();
}
