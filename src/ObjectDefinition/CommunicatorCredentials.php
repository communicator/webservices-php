<?php

/*
 * CommunicatorCorp\Client
 *
 * Copyright © 2015 Rippleffect Studio Ltd
 * Rights reserved.
 *
 * PHP version 5.4+
 */

namespace CommunicatorCorp\Client\ObjectDefinition;

/**
 * Object definition for the credentials required to access the Communicator API
 *
 * The `CommunicatorCredentials` class must be instantiated with credentials
 * prior to calling any web service method.
 *
 * @package CommunicatorCorp\Client
 * @author  Daniel Morris <daniel@rippleffect.com>
 */
class CommunicatorCredentials
{
    /**
     * The username of the API account
     *
     * @var string
     */
    private $username;

    /**
     * The password for the named account
     *
     * @var string
     */
    private $password;

    /**
     * Constructor
     *
     * @param string $username The username of the API account
     * @param string $password The password for the named account
     */
    public function __construct($username, $password)
    {
        $this->username = $username;
        $this->password = $password;
    }

    /**
     * Returns the username of the API account
     *
     * @return string
     *
     * @api
     */
    public function getUsername()
    {
        return $this->username;
    }

    /**
     * Returns the password for the named account
     *
     * @return string
     *
     * @api
     */
    public function getPassword()
    {
        return $this->password;
    }
}
