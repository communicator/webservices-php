<?php

/*
 * CommunicatorCorp\Client
 *
 * Copyright © 2015 Rippleffect Studio Ltd
 * Rights reserved.
 *
 * PHP version 5.4+
 */

namespace CommunicatorCorp\Client\Test\Service;

use CommunicatorCorp\Client\Service\DataService;
use CommunicatorCorp\Client\Service\MessageService;
use CommunicatorCorp\Client\Service\ResponseService;
use CommunicatorCorp\Client\Service\ServiceInterface;
use CommunicatorCorp\Client\ObjectDefinition\CommunicatorCredentials;

/**
 * Tests the `AbstractService` class
 *
 * @package CommunicatorCorp\Client
 * @author  Daniel Morris <daniel@rippleffect.com>
 */
class ServiceTest extends \PHPUnit_Framework_TestCase
{
    /**
     * Mock `DataService` object
     *
     * @var DataService|\PHPUnit_Framework_MockObject_MockObject
     */
    protected $dataService;

    /**
     * Mock `MessageService` object
     *
     * @var MessageService|\PHPUnit_Framework_MockObject_MockObject
     */
    protected $messageService;

    /**
     * Mock `ResponseService` object
     *
     * @var ResponseService|\PHPUnit_Framework_MockObject_MockObject
     */
    protected $responseService;

    /**
     * Instantiates a mock `DataService` object before each test
     *
     * @return void
     */
    public function setUp()
    {
        $this->dataService = $this
            ->getMockBuilder('CommunicatorCorp\Client\Service\DataService')
            ->disableOriginalConstructor()
            ->setMethods(null)
            ->getMock()
        ;

        $this->messageService = $this
            ->getMockBuilder('CommunicatorCorp\Client\Service\MessageService')
            ->disableOriginalConstructor()
            ->setMethods(null)
            ->getMock()
        ;

        $this->responseService = $this
            ->getMockBuilder('CommunicatorCorp\Client\Service\ResponseService')
            ->disableOriginalConstructor()
            ->setMethods(null)
            ->getMock()
        ;
    }

    /**
     * Tests that the correct URI is returned for the namespace
     *
     * @return void
     */
    public function testGetNamespace()
    {
        /** @var ServiceInterface $service */
        foreach ([$this->dataService, $this->messageService, $this->responseService] as $service) {
            $this->assertEquals('http://ws.communicatorcorp.com/', $service->getNamespace());
        }
    }

    /**
     * Tests the mutator and accessor for the `CommunicatorCredentials`
     *
     * @return void
     */
    public function testCommunicatorCredentials()
    {
        $communicatorCredentials = new CommunicatorCredentials('homer.simpson', 'donuts');

        $this->dataService->setCommunicatorCredentials($communicatorCredentials);

        $this->assertSame($communicatorCredentials, $this->dataService->getCommunicatorCredentials());
    }

    /**
     * Tests the constructor of each service with default and non-default parameters.
     *
     * @return void
     */
    public function testConstructor()
    {
        $communicatorCredentials = new CommunicatorCredentials('homer.simpson', 'donuts');
        $services = [DataService::class, MessageService::class, ResponseService::class];

        foreach ($services as $service) {
            $testService = new $service($communicatorCredentials);

            $this->assertEquals(SOAP_1_2, $testService->_soap_version);
            $this->assertObjectNotHasAttribute('trace', $testService);
        }

        foreach ($services as $service) {
            $testService = new $service($communicatorCredentials, SOAP_1_1, true);

            $this->assertEquals(SOAP_1_1, $testService->_soap_version);
            $this->assertObjectHasAttribute('trace', $testService);
            $this->assertEquals(1, $testService->trace);
        }
    }

    /**
     * Tests that the classmap trait is used
     *
     * @param string $remoteType The remote type to map
     * @param string $localType  The local type to map to the remote type
     *
     * @dataProvider classmapProvider
     *
     * @return void
     */
    public function testGetClassmap($remoteType, $localType)
    {
        /** @var ServiceInterface $service */
        foreach ([$this->dataService, $this->messageService, $this->responseService] as $service) {
            $classmap = $service->getClassmap();

            $this->assertArrayHasKey($remoteType, $classmap);
            $this->assertEquals($classmap[$remoteType], $localType);
        }
    }

    /**
     * Returns the classmap
     *
     * @return array
     */
    public function classmapProvider()
    {
        return array(
            /* @codingStandardsIgnoreStart */
            array('ClientDataTable', 'CommunicatorCorp\Client\ObjectDefinition\ClientDataTable'),
            array('ClientTable', 'CommunicatorCorp\Client\ObjectDefinition\ClientTable'),
            array('ClientTableColumn', 'CommunicatorCorp\Client\ObjectDefinition\ClientTableColumn'),
            array('ClientTableRelationship', 'CommunicatorCorp\Client\ObjectDefinition\ClientTableRelationship'),
            array('ColumnMapping', 'CommunicatorCorp\Client\ObjectDefinition\ColumnMapping'),
            array('Control', 'CommunicatorCorp\Client\ObjectDefinition\Control'),
            array('DataImport', 'CommunicatorCorp\Client\ObjectDefinition\DataImport'),
            array('DataImportResponse', 'CommunicatorCorp\Client\ObjectDefinition\DataImportResponse'),
            array('DataImportResponseDetail', 'CommunicatorCorp\Client\ObjectDefinition\DataImportResponseDetail'),
            array('DataImportResponseTopLevel', 'CommunicatorCorp\Client\ObjectDefinition\DataImportResponseTopLevel'),
            array('DataImportSubscription', 'CommunicatorCorp\Client\ObjectDefinition\DataImportSubscription'),
            array('DataRecord', 'CommunicatorCorp\Client\ObjectDefinition\DataRecord'),
            array('Dispatch', 'CommunicatorCorp\Client\ObjectDefinition\Dispatch'),
            array('DispatchDetails', 'CommunicatorCorp\Client\ObjectDefinition\DispatchDetails'),
            array('EmailDetail', 'CommunicatorCorp\Client\ObjectDefinition\EmailDetail'),
            array('EmailDispatch', 'CommunicatorCorp\Client\ObjectDefinition\EmailDispatch'),
            array('EmailDispatchBounceStatistics', 'CommunicatorCorp\Client\ObjectDefinition\EmailDispatchBounceStatistics'),
            array('EmailDispatchClickStatistics', 'CommunicatorCorp\Client\ObjectDefinition\EmailDispatchClickStatistics'),
            array('EmailDispatchOpenStatistics', 'CommunicatorCorp\Client\ObjectDefinition\EmailDispatchOpenStatistics'),
            array('EmailDispatchUnsubscribeStatistics', 'CommunicatorCorp\Client\ObjectDefinition\EmailDispatchUnsubscribeStatistics'),
            array('EmailLink', 'CommunicatorCorp\Client\ObjectDefinition\EmailLink'),
            array('ExtractColumn', 'CommunicatorCorp\Client\ObjectDefinition\ExtractColumn'),
            array('ExtractJob', 'CommunicatorCorp\Client\ObjectDefinition\ExtractJob'),
            array('FromAddress', 'CommunicatorCorp\Client\ObjectDefinition\FromAddress'),
            array('FTPDataImport', 'CommunicatorCorp\Client\ObjectDefinition\FTPDataImport'),
            array('MailingList', 'CommunicatorCorp\Client\ObjectDefinition\MailingList'),
            array('MailingListAnalyticsProvider', 'CommunicatorCorp\Client\ObjectDefinition\MailingListAnalyticsProvider'),
            array('MailingListAnalyticsProviderParameter', 'CommunicatorCorp\Client\ObjectDefinition\MailingListAnalyticsProviderParameter'),
            array('MailingListExtract', 'CommunicatorCorp\Client\ObjectDefinition\MailingListExtract'),
            array('MailingListFilter', 'CommunicatorCorp\Client\ObjectDefinition\MailingListFilter'),
            array('MailingListFilterItem', 'CommunicatorCorp\Client\ObjectDefinition\MailingListFilterItem'),
            array('MessageBody', 'CommunicatorCorp\Client\ObjectDefinition\MessageBody'),
            array('OperatorInfo', 'CommunicatorCorp\Client\ObjectDefinition\OperatorInfo'),
            array('PageOption', 'CommunicatorCorp\Client\ObjectDefinition\PageOption'),
            array('Subscription', 'CommunicatorCorp\Client\ObjectDefinition\Subscription'),
            array('SubscriptionInfo', 'CommunicatorCorp\Client\ObjectDefinition\SubscriptionInfo'),
            array('TableDataExtract', 'CommunicatorCorp\Client\ObjectDefinition\TableDataExtract'),
            array('TextDispatch', 'CommunicatorCorp\Client\ObjectDefinition\TextDispatch'),
            array('TopLevelDetailItem', 'CommunicatorCorp\Client\ObjectDefinition\TopLevelDetailItem'),
            array('TextMessage', 'CommunicatorCorp\Client\ObjectDefinition\TextMessage'),
            array('TimeZone', 'CommunicatorCorp\Client\ObjectDefinition\TimeZone'),
            array('TriggeredDispatch', 'CommunicatorCorp\Client\ObjectDefinition\TriggeredDispatch'),
            array('CreateMailingListResponse', 'CommunicatorCorp\Client\Response\CreateMailingListResponse'),
            array('DataImporterResponse', 'CommunicatorCorp\Client\Response\DataImporterResponse'),
            array('GetClientTableColumnsResponse', 'CommunicatorCorp\Client\Response\GetClientTableColumnsResponse'),
            array('GetClientTableResponse', 'CommunicatorCorp\Client\Response\GetClientTableResponse'),
            array('GetClientTablesResponse', 'CommunicatorCorp\Client\Response\GetClientTablesResponse'),
            array('GetContactSubscriptionResponse', 'CommunicatorCorp\Client\Response\GetContactSubscriptionResponse'),
            array('GetContactSubscriptionsResponse', 'CommunicatorCorp\Client\Response\GetContactSubscriptionsResponse'),
            array('GetEmailDispatchResponse', 'CommunicatorCorp\Client\Response\GetEmailDispatchResponse'),
            array('GetEmailListResponse', 'CommunicatorCorp\Client\Response\GetEmailListResponse'),
            array('GetMailingListColumnsResponse', 'CommunicatorCorp\Client\Response\GetMailingListColumnsResponse'),
            array('GetMailingListCountResponse', 'CommunicatorCorp\Client\Response\GetMailingListCountResponse'),
            array('GetMailingListFromAddressesResponse', 'CommunicatorCorp\Client\Response\GetMailingListFromAddressesResponse'),
            array('GetMailingListResponse', 'CommunicatorCorp\Client\Response\GetMailingListResponse'),
            array('GetMailingListsResponse', 'CommunicatorCorp\Client\Response\GetMailingListsResponse'),
            array('GetTriggerDispatchesResponse', 'CommunicatorCorp\Client\Response\GetTriggerDispatchesResponse'),
            array('GetTriggeredDispatchesResponse', 'CommunicatorCorp\Client\Response\GetTriggeredDispatchesResponse'),
            array('UpdateContactSubscriptionResponse', 'CommunicatorCorp\Client\Response\UpdateContactSubscriptionResponse'),
            array('UpdateContactSubscriptionsResponse', 'CommunicatorCorp\Client\Response\UpdateContactSubscriptionsResponse'),
            array('UpdateMailingListResponse', 'CommunicatorCorp\Client\Response\UpdateMailingListResponse'),
            /* @codingStandardsIgnoreEnd */
        );
    }
}
