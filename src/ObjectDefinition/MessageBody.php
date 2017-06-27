<?php

/*
 * CommunicatorCorp\Client
 *
 * Copyright © 2015 Rippleffect Studio Ltd
 * Rights reserved.
 */

namespace CommunicatorCorp\Client\ObjectDefinition;

/**
 * Message body object definition.
 *
 * @method $this  setId(int $id)
 * @method $this  setMailingListId(int $mailingListId)
 * @method $this  setName(string $name)
 * @method $this  setDescription(string $description)
 * @method $this  setPlainText(string $plainText)
 * @method $this  setHtmlText(string $htmlText)
 * @method int    getId()
 * @method int    getMailingListId()
 * @method string getName()
 * @method string getDescription()
 * @method string getPlainText()
 * @method string getHtmlText()
 *
 * @package CommunicatorCorp\Client
 * @author  Daniel Morris <daniel@rippleffect.com>
 */
class MessageBody extends AbstractObjectDefinition
{
    /**
     * {@inheritDoc}
     *
     * @return array
     */
    public function getMutableProperties()
    {
        return [
            'Id',
            'MailingListId',
            'Name',
            'Description',
            'PlainText',
            'HtmlText',
        ];
    }
}
