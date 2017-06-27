<?php

/*
 * CommunicatorCorp\Client
 *
 * Copyright © 2015 Rippleffect Studio Ltd
 * Rights reserved.
 *
 * PHP version 5.4+
 */

namespace CommunicatorCorp\Client\Response;

/**
 * Abstract iterable response
 *
 * @package CommunicatorCorp\Client
 * @author  Daniel Morris <daniel@rippleffect.com>
 */
abstract class AbstractIterableResponse implements \Iterator
{
    /**
     * {@inheritDoc}
     *
     * @var int
     */
    protected $position = 0;

    /**
     * Returns the name of the result object property within the response
     *
     * @return string
     */
    abstract public function getResultObjectProperty();

    /**
     * Returns the name of the object definition property within the response
     *
     * @return string
     */
    abstract public function getObjectDefinitionProperty();

    /**
     * {@inheritDoc}
     *
     * @return int
     */
    public function key()
    {
        return $this->position;
    }

    /**
     * {@inheritDoc}
     *
     * @return void
     */
    public function rewind()
    {
        $this->position = 0;
    }

    /**
     * {@inheritDoc}
     *
     * @return void
     */
    public function next()
    {
        ++$this->position;
    }

    /**
     * {@inheritDoc}
     *
     * @return
     */
    public function current()
    {
        return $this
            ->{$this->getResultObjectProperty()}
            ->{$this->getObjectDefinitionProperty()}[$this->position]
        ;
    }

    /**
     * {@inheritDoc}
     *
     * @return bool
     */
    public function valid()
    {
        return isset(
            $this
            ->{$this->getResultObjectProperty()}
            ->{$this->getObjectDefinitionProperty()}[$this->position]
        );
    }
}
