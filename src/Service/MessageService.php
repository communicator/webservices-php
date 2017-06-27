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

use CommunicatorCorp\Client\ObjectDefinition\Control;
use CommunicatorCorp\Client\ObjectDefinition\Dispatch;
use CommunicatorCorp\Client\ObjectDefinition\EmailDetail;
use CommunicatorCorp\Client\ObjectDefinition\EmailDispatch;
use CommunicatorCorp\Client\ObjectDefinition\MessageBody;
use CommunicatorCorp\Client\ObjectDefinition\PageOption;
use CommunicatorCorp\Client\ObjectDefinition\TextDispatch;
use CommunicatorCorp\Client\ObjectDefinition\TextMessage;
use CommunicatorCorp\Client\ObjectDefinition\TimeZone;

/**
 * The message service
 *
 * @package CommunicatorCorp\Client
 * @author  Daniel Morris <daniel@rippleffect.com>
 */
class MessageService extends AbstractService
{
    /**
     * {@inheritDoc}
     *
     * @return string
     *
     * @api
     */
    public function getWsdl()
    {
        return 'https://ws.communicatorcorp.com/MessageService.asmx?wsdl';
    }

    /**
     * Returns the emails associated to an account
     *
     * @param PageOption $pageOption The pagination object
     *
     * @return EmailDetail[]
     *
     * @api
     */
    public function getEmailList(PageOption $pageOption)
    {
        return $this->request('getEmailList', ['pageOption' => $pageOption]);
    }

    /**
     * Returns an individual email with a specified ID.
     *
     * @param int $emailId The ID of the email.
     *
     * @return MessageBody
     */
    public function getEmail($emailId)
    {
        return $this->request('getEmail', ['emailId' => $emailId]);
    }

    /**
     * Creates a new HTML email.
     *
     * @param MessageBody $message The message body.
     *
     * @return MessageBody
     */
    public function createHtmlEmail(MessageBody $message)
    {
        return $this->request('createHtmlEmail', ['message' => $message]);
    }

    /**
     * Creates a new plain text email.
     *
     * @param MessageBody $message The message.
     *
     * @return MessageBody
     */
    public function createPlainTextEmail(MessageBody $message)
    {
        return $this->request('createPlainTextEmail', ['message' => $message]);
    }

    /**
     * Creates a new email dispatch.
     *
     * @param EmailDispatch $emailDispatch The email dispatch to create.
     *
     * @return EmailDispatch
     */
    public function createEmailDispatch(EmailDispatch $emailDispatch)
    {
        return $this->request('createEmailDispatch', ['emailDispatch' => $emailDispatch]);
    }

    /**
     * Returns all email dispatches awaiting authorisation.
     *
     * @return EmailDispatch[]
     */
    public function getUnauthorisedEmailDispatches()
    {
        return $this->request('getUnauthorisedEmailDispatches');
    }

    /**
     * Provides a unified control to authorise, pause, resume, or cancel email dispatches.
     *
     * @param Control $dispatchControl Control object identifying the dispatch and command.
     *
     * @return EmailDispatch
     */
    public function emailDispatchControl(Control $dispatchControl)
    {
        return $this->request('emailDispatchControl', ['dispatchControl' => $dispatchControl]);
    }

    /**
     * Returns all time zones within the application.
     *
     * @return TimeZone[]
     */
    public function getTimeZones()
    {
        return $this->request('getTimeZones');
    }

    /**
     * Creates a new text message.
     *
     * @param TextMessage $textMessage The text message.
     *
     * @return TextMessage
     */
    public function createTextMessage(TextMessage $textMessage)
    {
        return $this->request('createTextMessage', ['textMessage' => $textMessage]);
    }

    /**
     * Returns a text message with a given text message ID.
     *
     * @param int $textMessageId The text message ID.
     *
     * @return TextMessage
     */
    public function getTextMessage($textMessageId)
    {
        return $this->request('getTextMessage', $textMessageId);
    }

    /**
     * Returns a collection of text messages.
     *
     * @param int $startIndex The starting index of the collection.
     *
     * @return TextMessage[]
     */
    public function getTextMessageCollection($startIndex = 0)
    {
        return $this->request('getTextMessageCollection', ['startIndex' => $startIndex]);
    }

    /**
     * Creates a new text dispatch.
     *
     * @param TextDispatch $textDispatch The text dispatch to create.
     *
     * @return TextDispatch
     */
    public function createTextDispatch(TextDispatch $textDispatch)
    {
        return $this->request('createTextDispatch', ['textDispatch' => $textDispatch]);
    }

    /**
     * Returns a text dispatch with a given ID.
     *
     * @param int $textDispatchId The text dispatch ID.
     *
     * @return TextDispatch
     */
    public function getTextDispatch($textDispatchId)
    {
        return $this->request('getTextDispatch', ['textDispatchId' => $textDispatchId]);
    }

    /**
     * Returns a collection of dispatches that are awaiting authorisation.
     *
     * @param int $startingIndex The starting index of the collection.
     *
     * @return Dispatch[]
     */
    public function getUnauthorisedDispatches($startingIndex = 0)
    {
        return $this->request('getUnauthorisedDispatches', ['startingIndex' => $startingIndex]);
    }

    /**
     * Performs an action on a dispatch.
     *
     * @param Control $dispatchControl The control with the dispatch ID and action to perform.
     *
     * @return Dispatch
     */
    public function dispatchControl(Control $dispatchControl)
    {
        return $this->request('dispatchControl', ['dispatchControl' => $dispatchControl]);
    }

    /**
     * Returns the trigger dispatches configured within Communicator.
     *
     * @param int $mailingListId The ID of the mailing list associated to the dispatches.
     *
     * @return EmailDispatch[]
     */
    public function getTriggerDispatches($mailingListId)
    {
        $response = $this->request('getTriggerDispatches', ['mailingListId' => $mailingListId]);

        // On this endpoint only, if only one dispatch exists, it is returned as an object
        // instead of an array of one object, this fixes this inconsistency, I have informed
        // Communicator of this and we can remove this once their API is changed.
        if ($response instanceof EmailDispatch) {
            $response = array($response);
        }

        return $response;
    }

    /**
     * Returns the triggered dispatches
     *
     * @param int $startIndex The starting index for triggered dispatch pagination
     *
     * @return Dispatch[]
     *
     * @api
     */
    public function getTriggeredDispatches($startIndex)
    {
        return $this->request('getTriggeredDispatches', ['startIndex' => $startIndex]);
    }
}
