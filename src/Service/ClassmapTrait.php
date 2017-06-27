<?php

/*
 * CommunicatorCorp\Client
 *
 * Copyright © 2015 Rippleffect Studio Ltd
 * Rights reserved.
 */

namespace CommunicatorCorp\Client\Service;

/**
 * Defines the map between the Communicator WSDL and the client classes
 *
 * @package CommunicatorCorp\Client
 * @author  Daniel Morris <daniel@rippleffect.com>
 */
trait ClassmapTrait
{
    /**
     * The classmap
     *
     * @var array
     */
    private $classmap = array(
        // @codingStandardsIgnoreStart
        'ClientDataTable' => 'CommunicatorCorp\Client\ObjectDefinition\ClientDataTable',
        'ClientTable' => 'CommunicatorCorp\Client\ObjectDefinition\ClientTable',
        'ClientTableColumn' => 'CommunicatorCorp\Client\ObjectDefinition\ClientTableColumn',
        'ClientTableRelationship' => 'CommunicatorCorp\Client\ObjectDefinition\ClientTableRelationship',
        'ColumnMapping' => 'CommunicatorCorp\Client\ObjectDefinition\ColumnMapping',
        'Control' => 'CommunicatorCorp\Client\ObjectDefinition\Control',
        'DataImport' => 'CommunicatorCorp\Client\ObjectDefinition\DataImport',
        'DataImportResponse' => 'CommunicatorCorp\Client\ObjectDefinition\DataImportResponse',
        'DataImportResponseDetail' => 'CommunicatorCorp\Client\ObjectDefinition\DataImportResponseDetail',
        'DataImportResponseTopLevel' => 'CommunicatorCorp\Client\ObjectDefinition\DataImportResponseTopLevel',
        'DataImportSubscription' => 'CommunicatorCorp\Client\ObjectDefinition\DataImportSubscription',
        'DataRecord' => 'CommunicatorCorp\Client\ObjectDefinition\DataRecord',
        'Dispatch' => 'CommunicatorCorp\Client\ObjectDefinition\Dispatch',
        'DispatchDetails' => 'CommunicatorCorp\Client\ObjectDefinition\DispatchDetails',
        'EmailDetail' => 'CommunicatorCorp\Client\ObjectDefinition\EmailDetail',
        'EmailDispatch' => 'CommunicatorCorp\Client\ObjectDefinition\EmailDispatch',
        'EmailDispatchBounceStatistics' => 'CommunicatorCorp\Client\ObjectDefinition\EmailDispatchBounceStatistics',
        'EmailDispatchClickStatistics' => 'CommunicatorCorp\Client\ObjectDefinition\EmailDispatchClickStatistics',
        'EmailDispatchOpenStatistics' => 'CommunicatorCorp\Client\ObjectDefinition\EmailDispatchOpenStatistics',
        'EmailDispatchUnsubscribeStatistics' => 'CommunicatorCorp\Client\ObjectDefinition\EmailDispatchUnsubscribeStatistics',
        'EmailLink' => 'CommunicatorCorp\Client\ObjectDefinition\EmailLink',
        'ExtractColumn' => 'CommunicatorCorp\Client\ObjectDefinition\ExtractColumn',
        'ExtractJob' => 'CommunicatorCorp\Client\ObjectDefinition\ExtractJob',
        'FromAddress' => 'CommunicatorCorp\Client\ObjectDefinition\FromAddress',
        'FTPDataImport' => 'CommunicatorCorp\Client\ObjectDefinition\FTPDataImport',
        'MailingList' => 'CommunicatorCorp\Client\ObjectDefinition\MailingList',
        'MailingListAnalyticsProvider' => 'CommunicatorCorp\Client\ObjectDefinition\MailingListAnalyticsProvider',
        'MailingListAnalyticsProviderParameter' => 'CommunicatorCorp\Client\ObjectDefinition\MailingListAnalyticsProviderParameter',
        'MailingListExtract' => 'CommunicatorCorp\Client\ObjectDefinition\MailingListExtract',
        'MailingListFilter' => 'CommunicatorCorp\Client\ObjectDefinition\MailingListFilter',
        'MailingListFilterItem' => 'CommunicatorCorp\Client\ObjectDefinition\MailingListFilterItem',
        'MessageBody' => 'CommunicatorCorp\Client\ObjectDefinition\MessageBody',
        'OperatorInfo' => 'CommunicatorCorp\Client\ObjectDefinition\OperatorInfo',
        'PageOption' => 'CommunicatorCorp\Client\ObjectDefinition\PageOption',
        'Subscription' => 'CommunicatorCorp\Client\ObjectDefinition\Subscription',
        'SubscriptionInfo' => 'CommunicatorCorp\Client\ObjectDefinition\SubscriptionInfo',
        'TableDataExtract' => 'CommunicatorCorp\Client\ObjectDefinition\TableDataExtract',
        'TextDispatch' => 'CommunicatorCorp\Client\ObjectDefinition\TextDispatch',
        'TextMessage' => 'CommunicatorCorp\Client\ObjectDefinition\TextMessage',
        'TimeZone' => 'CommunicatorCorp\Client\ObjectDefinition\TimeZone',
        'TopLevelDetailItem' => 'CommunicatorCorp\Client\ObjectDefinition\TopLevelDetailItem',
        'TriggeredDispatch' => 'CommunicatorCorp\Client\ObjectDefinition\TriggeredDispatch',
        'CreateMailingListResponse' => 'CommunicatorCorp\Client\Response\CreateMailingListResponse',
        'DataImporterResponse' => 'CommunicatorCorp\Client\Response\DataImporterResponse',
        'GetClientTableColumnsResponse' => 'CommunicatorCorp\Client\Response\GetClientTableColumnsResponse',
        'GetClientTableResponse' => 'CommunicatorCorp\Client\Response\GetClientTableResponse',
        'GetClientTablesResponse' => 'CommunicatorCorp\Client\Response\GetClientTablesResponse',
        'GetContactSubscriptionResponse' => 'CommunicatorCorp\Client\Response\GetContactSubscriptionResponse',
        'GetContactSubscriptionsResponse' => 'CommunicatorCorp\Client\Response\GetContactSubscriptionsResponse',
        'GetEmailDispatchResponse' => 'CommunicatorCorp\Client\Response\GetEmailDispatchResponse',
        'GetEmailListResponse' => 'CommunicatorCorp\Client\Response\GetEmailListResponse',
        'GetMailingListColumnsResponse' => 'CommunicatorCorp\Client\Response\GetMailingListColumnsResponse',
        'GetMailingListCountResponse' => 'CommunicatorCorp\Client\Response\GetMailingListCountResponse',
        'GetMailingListFromAddressesResponse' => 'CommunicatorCorp\Client\Response\GetMailingListFromAddressesResponse',
        'GetMailingListResponse' => 'CommunicatorCorp\Client\Response\GetMailingListResponse',
        'GetMailingListsResponse' => 'CommunicatorCorp\Client\Response\GetMailingListsResponse',
        'GetTriggerDispatchesResponse' => 'CommunicatorCorp\Client\Response\GetTriggerDispatchesResponse',
        'GetTriggeredDispatchesResponse' => 'CommunicatorCorp\Client\Response\GetTriggeredDispatchesResponse',
        'UpdateContactSubscriptionResponse' => 'CommunicatorCorp\Client\Response\UpdateContactSubscriptionResponse',
        'UpdateContactSubscriptionsResponse' => 'CommunicatorCorp\Client\Response\UpdateContactSubscriptionsResponse',
        'UpdateMailingListResponse' => 'CommunicatorCorp\Client\Response\UpdateMailingListResponse',
        // @codingStandardsIgnoreEnd
    );

    /**
     * Returns the classmap
     *
     * @return array
     */
    public function getClassmap()
    {
        return $this->classmap;
    }
}
