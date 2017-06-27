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

use CommunicatorCorp\Client\EnumerationType\SubscriberSearchType;
use CommunicatorCorp\Client\ObjectDefinition\ClientTable;
use CommunicatorCorp\Client\ObjectDefinition\ClientTableColumn;
use CommunicatorCorp\Client\ObjectDefinition\ClientTableRelationship;
use CommunicatorCorp\Client\ObjectDefinition\Control;
use CommunicatorCorp\Client\ObjectDefinition\DataImport;
use CommunicatorCorp\Client\ObjectDefinition\DataRecord;
use CommunicatorCorp\Client\ObjectDefinition\FTPDataImport;
use CommunicatorCorp\Client\ObjectDefinition\MailingListAnalyticsProvider;
use CommunicatorCorp\Client\ObjectDefinition\MailingListExtract;
use CommunicatorCorp\Client\ObjectDefinition\MailingListFilter;
use CommunicatorCorp\Client\ObjectDefinition\OperatorInfo;
use CommunicatorCorp\Client\ObjectDefinition\SubscriptionInfo;
use CommunicatorCorp\Client\ObjectDefinition\MailingList;
use CommunicatorCorp\Client\ObjectDefinition\TableDataExtract;
use CommunicatorCorp\Client\Response\AbstractResponse;

/**
 * The data service
 *
 * @package CommunicatorCorp\Client
 * @author  Daniel Morris <daniel@rippleffect.com>
 */
class DataService extends AbstractService
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
        return 'https://ws.communicatorcorp.com/DataService.asmx?wsdl';
    }

    /**
     * Returns an array of `ClientTable` object definitions
     *
     * @return ClientTable[]
     *
     * @api
     */
    public function getClientTables()
    {
        return $this->request('getClientTables');
    }

    /**
     * Returns a client table object definition given a client table ID
     *
     * @param int $clientTableId The client table ID
     *
     * @return ClientTable
     *
     * @api
     */
    public function getClientTable($clientTableId)
    {
        return $this->request('getClientTable', ['clientTableId' => $clientTableId]);
    }

    /**
     * Returns an array of client table column object definitions
     *
     * @param int $clientTableId The client table ID
     *
     * @return ClientTableColumn[]
     *
     * @api
     */
    public function getClientTableColumns($clientTableId)
    {
        return $this->request('getClientTableColumns', ['clientTableId' => $clientTableId]);
    }

    /**
     * Returns an array of client table object definitions
     *
     * @param int $mailingListId The mailing list ID
     *
     * @return ClientTable[]
     *
     * @api
     */
    public function getClientTablesForMailingList($mailingListId)
    {
        return $this->request('getClientTablesForMailingList', ['mailingListId' => $mailingListId]);
    }

    /**
     * Returns the number of subscribers attached to a mailing list
     *
     * @param int    $mailingListId        The mailing list ID
     * @param string $subscriberSearchType The subscriber search type
     *
     * @return int
     *
     * @api
     */
    public function getMailingListCount($mailingListId, $subscriberSearchType)
    {
        return $this->request('getMailingListCount', [
            'mailingListId' => $mailingListId,
            'subscriberSearchType' => $subscriberSearchType,
        ]);
    }

    /**
     * Returns the subscription information for an email address on a mailing list
     *
     * @param string $emailAddress  The email address
     * @param int    $mailingListId The mailing list ID
     *
     * @return SubscriptionInfo
     *
     * @api
     */
    public function getContactSubscription($emailAddress, $mailingListId)
    {
        return $this->request('getContactSubscription', [
            'mailingListId' => $mailingListId,
            'emailAddress' => $emailAddress,
        ]);
    }

    /**
     * Returns the subscription info for an email address and a client table
     *
     * @param string $emailAddress  The email address
     * @param int    $clientTableId The client table ID
     *
     * @return SubscriptionInfo[]
     */
    public function getContactSubscriptions($emailAddress, $clientTableId)
    {
        return $this->request('getContactSubscriptions', [
            'emailAddress' => $emailAddress,
            'clientTableId' => $clientTableId,
        ]);
    }

    /**
     * Updates many subscriptions for a given contact
     *
     * @param string $emailAddress  The email address
     * @param array  $subscriptions The subscriptions
     *
     * @return SubscriptionInfo[]
     *
     * @api
     */
    public function updateContactSubscriptions($emailAddress, array $subscriptions)
    {
        return $this->request('updateContactSubscriptions', [
            'emailAddress' => $emailAddress,
            'subscriptions' => $subscriptions,
        ]);
    }

    /**
     * Returns an array of client table column objects for a mailing list
     *
     * @param int $mailingListId The mailing list ID
     *
     * @return array
     *
     * @api
     */
    public function getMailingListColumns($mailingListId)
    {
        return $this->request('getMailingListColumns', ['mailingListId' => $mailingListId]);
    }

    /**
     * Returns an array of `FromAddress` object definitions
     *
     * @return array
     *
     * @api
     */
    public function getMailingListFromAddresses()
    {
        return $this->request('getMailingListFromAddresses');
    }

    /**
     * Returns an array of mailing list object definitions
     *
     * @return array
     *
     * @api
     */
    public function getMailingLists()
    {
        return $this->request('getMailingLists');
    }

    /**
     * Returns a mailing list
     *
     * @param int $mailingListId The mailing list ID
     *
     * @return MailingList
     *
     * @api
     */
    public function getMailingList($mailingListId)
    {
        return $this->request('getMailingList', ['mailingListId' => $mailingListId]);
    }

    /**
     * Creates a mailing list
     *
     * @param MailingList $mailingList The mailing list
     *
     * @return MailingList
     *
     * @api
     */
    public function createMailingList(MailingList $mailingList)
    {
        return $this->request('createMailingList', ['mailingList' => $mailingList]);
    }

    /**
     * Updates a mailing list
     *
     * @param MailingList $mailingList The mailing list
     *
     * @return MailingList
     */
    public function updateMailingList(MailingList $mailingList)
    {
        return $this->request('updateMailingList', ['mailingList' => $mailingList]);
    }

    /**
     * Imports data into Communicator.
     *
     * @param DataImport $dataImport The data import.
     *
     * @return DataImport
     */
    public function dataImporter(DataImport $dataImport)
    {
        return $this->request('dataImporter', ['dataImport' => $dataImport]);
    }

    /**
     * Updates a contact subscription
     *
     * @param string           $emailAddress     The email address
     * @param SubscriptionInfo $subscriptionInfo The subscription information
     *
     * @return SubscriptionInfo
     */
    public function updateContactSubscription($emailAddress, SubscriptionInfo $subscriptionInfo)
    {
        return $this->request('updateContactSubscription', [
            'emailAddress' => $emailAddress,
            'subscription' => $subscriptionInfo,
        ]);
    }

    /**
     * Returns all analytics providers currently configured for a given mailing list.
     *
     * @param int $mailingListId The mailing list ID.
     *
     * @return MailingListAnalyticsProvider[]
     */
    public function getMailingListAnalyticsProviders($mailingListId)
    {
        return $this->request('getMailingListAnalyticsProviders', ['mailingListId' => $mailingListId]);
    }

    /**
     * Creates a new mailing list filter.
     *
     * @param int               $mailingListId     The mailing list ID.
     * @param MailingListFilter $mailingListFilter The mailing list filter.
     *
     * @return MailingListFilter
     */
    public function createMailingListFilter($mailingListId, MailingListFilter $mailingListFilter)
    {
        return $this->request('createMailingListFilter', [
            'mailingListId' => $mailingListId,
            'mailingListFilter' => $mailingListFilter,
        ]);
    }

    /**
     * Updates a mailing list filter.
     *
     * @param int               $mailingListId     The mailing list ID.
     * @param MailingListFilter $mailingListFilter The mailing list filter.
     *
     * @return MailingListFilter
     */
    public function updateMailingListFilter($mailingListId, MailingListFilter $mailingListFilter)
    {
        return $this->request('updateMailingListFilter', [
            'mailingListId' => $mailingListId,
            'mailingListFilter' => $mailingListFilter,
        ]);
    }

    /**
     * Returns all the mailing list filters for a specified mailing list ID.
     *
     * @param int $mailingListId The mailing list ID.
     *
     * @return MailingListFilter[]
     */
    public function getMailingListFilters($mailingListId)
    {
        return $this->request('getMailingListFilters', ['mailingListId' => $mailingListId]);
    }

    /**
     * Returns the details of the mailing list filter with the specified ID.
     *
     * @param int $mailingListFilterId The mailing list filter ID.
     *
     * @return MailingListFilter
     */
    public function getMailingListFilter($mailingListFilterId)
    {
        return $this->request('getMailingListFilter', ['mailingListFilterId' => $mailingListFilterId]);
    }

    /**
     * Returns a count of the number of records for a mailing list filter.
     *
     * @param int                  $mailingListId        The mailing list ID.
     * @param int                  $mailingListFilterId  The mailing list filter ID.
     * @param SubscriberSearchType $subscriberType       The subscriber search type.
     *
     * @return int
     */
    public function getMailingListFilterCount($mailingListId, $mailingListFilterId, SubscriberSearchType $subscriberType)
    {
        return $this->request('getMailingListFilterCount', [
            'mailingListId' => $mailingListId,
            'mailingListFilterId' => $mailingListFilterId,
            'subscriberType' => $subscriberType,
        ]);
    }

    /**
     * Returns all operators from within the account that can be used on a mailing list filter.
     *
     * @return OperatorInfo[]
     */
    public function getMailingListFilterOperators()
    {
        return $this->request('getMailingListFilterOperators');
    }

    /**
     * Creates a new table data extract.
     *
     * @param TableDataExtract $extract The table extract to create.
     *
     * @return TableDataExtract
     */
    public function createTableExtract(TableDataExtract $extract)
    {
        return $this->request('createTableExtract', ['extract' => $extract]);
    }

    /**
     * Returns an existing table extract object.
     *
     * @param int $extractJobId The extract job ID.
     *
     * @return TableDataExtract
     */
    public function getTableExtract($extractJobId)
    {
        return $this->request('getTableExtract', ['extractJobId' => $extractJobId]);
    }

    /**
     * Creates a new mailing list extract for a mailing list.
     *
     * @param MailingListExtract $extract The mailing list extract.
     *
     * @return MailingListExtract
     */
    public function createMailingListExtract(MailingListExtract $extract)
    {
        return $this->request('createMailingListExtract', [
            'extract' => $extract,
        ]);
    }

    /**
     * Returns a single users data record from a contact or data table using a unique identifier.
     *
     * @param int    $tableId           The table ID.
     * @param string $contactIdentifier The contact identifier.
     *
     * @return DataRecord
     */
    public function getContactData($tableId, $contactIdentifier)
    {
        return $this->request('getContactData', [
            'tableId' => $tableId,
            'contactIdentifier' => $contactIdentifier,
        ]);
    }

    /**
     * Instantiates a batch import from a file uploaded via FTP to Communicator.
     *
     * @param FTPDataImport $ftpDataImport The FTP data import.
     *
     * @return FTPDataImport
     */
    public function dataImporterViaFtp(FTPDataImport $ftpDataImport)
    {
        return $this->request('dataImporterViaFtp', [
            'FTPDataImport' => $ftpDataImport,
        ]);
    }

    /**
     * Returns the details of a data import with a given data import ID.
     *
     * @param int $dataImportId The data import ID.
     *
     * @return DataImport
     */
    public function getDataImport($dataImportId)
    {
        return $this->request('getDataImport', ['dataImportId' => $dataImportId]);
    }

    /**
     * Provides a unified control to authorise, pause, resume, and cancel data imports.
     *
     * @param Control $importControl Control object identifying the data import and command.
     *
     * @return FTPDataImport
     */
    public function dataImportControl(Control $importControl)
    {
        return $this->request('dataImportControl', ['importControl' => $importControl]);
    }

    /**
     * Returns the relationships between lookup tables.
     *
     * @return ClientTableRelationship[]
     */
    public function getRelationships()
    {
        return $this->request('getRelationships');
    }

    /**
     * Returns all relationships defined on a specific table.
     *
     * @param int $tableId The ID of the table.
     *
     * @return ClientTableRelationship[]
     */
    public function getClientTableRelationships($tableId)
    {
        return $this->request('getClientTableRelationships', ['tableId' => $tableId]);
    }

    /**
     * Deletes a mailing list filter.
     *
     * @param int $mailingListFilterId The mailing list filter ID.
     *
     * @return void
     */
    public function deleteMailingListFilter($mailingListFilterId)
    {
        $this->request('deleteMailingListFilter', [
            'mailingListFilterId' => $mailingListFilterId,
        ]);
    }
}
