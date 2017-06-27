<?php

/*
 * CommunicatorCorp\Client
 *
 * Copyright © 2015 Rippleffect Studio Ltd
 * Rights reserved.
 */

namespace CommunicatorCorp\Client\ObjectDefinition;

/**
 * `DispatchDetails` object definition.
 *
 * @method $this  setMailingListId(int $mailingListId)
 * @method $this  setMailingListFilterId(int $mailingListFilterId)
 * @method $this  setFromName(string $fromName)
 * @method $this  setTimeZoneName(string $timeZoneName)
 * @method $this  setIsTriggeredDispatch(bool $isTriggeredDispatch)
 * @method int    getMailingListId()
 * @method int    getMailingListFilterId()
 * @method string getFromName()
 * @method string getTimeZoneName()
 * @method bool   getIsTriggeredDispatch()
 *
 * @package CommunicatorCorp\Client
 * @author  Daniel Morris <daniel@rippleffect.com>
 */
class DispatchDetails extends Dispatch
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
                'MailingListId',
                'MailingListFilterId',
                'FromName',
                'TimeZoneName',
                'IsTriggeredDispatch',
            )
        );
    }
}
