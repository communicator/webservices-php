<?php

/*
 * Communicator\Client
 *
 * Copyright © 2015 Rippleffect Studio Ltd
 * Rights reserved.
 */

namespace CommunicatorCorp\Client\ObjectDefinition;

/**
 * `TextDispatch` object definition.
 *
 * @method $this setTextMessageId(int $textMessageId)
 * @method $this setMaximumPagesPerRecipient(int $maximumPagesPerRecipient)
 * @method $this setAllowSpecialCharacters(bool $allowSpecialCharacters)
 * @method int   getTextMessageId()
 * @method int   getMaximumPagesPerRecipient()
 * @method bool  getAllowSpecialCharacters()
 *
 * @package CommunicatorCorp\Client
 * @author  Daniel Morris <daniel@rippleffect.com>
 */
class TextDispatch extends DispatchDetails
{
    /**
     * {@inheritDoc}
     *
     * @return array
     */
    public function getMutableProperties()
    {
        return array_merge(
            parent::getMutableProperties(),
            array(
                'TextMessageId',
                'MaximumPagesPerRecipient',
                'AllowSpecialCharacters',
            )
        );
    }
}
