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
 * Object definition for a client table column
 *
 * @method $this       setId(int $id)
 * @method $this       setName(string $name)
 * @method $this       setIsUniqueColumn(bool $isUniqueColumn)
 * @method $this       setIsLinkColumn(bool $isLinkColumn)
 * @method $this       setIsLookupColumn(bool $isLookupColumn)
 * @method $this       setMailingType(MailingType $mailingType)
 * @method $this       setDataType(string $dataType)
 * @method int         getId()
 * @method string      getName()
 * @method bool        getIsUniqueColumn()
 * @method bool        getIsLinkColumn()
 * @method bool        getIsLookupColumn()
 * @method MailingType getMailingType()
 * @method string      getDataType()
 *
 * @package CommunicatorCorp\Client
 * @author  Daniel Morris <daniel@rippleffect.com>
 */
class ClientTableColumn extends AbstractObjectDefinition
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
            'Name',
            'IsUniqueColumn',
            'IsLinkColumn',
            'IsLookupColumn',
            'MailingType',
            'DataType',
        ];
    }
}
