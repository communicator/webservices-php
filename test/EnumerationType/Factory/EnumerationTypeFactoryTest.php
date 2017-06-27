<?php

/*
 * CommunicatorCorp\Client
 *
 * Copyright © 2015 Rippleffect Studio Ltd
 * Rights reserved.
 *
 * PHP version 5.4+
 */

namespace CommunicatorCorp\Client\Test\EnumerationType\Factory;

use CommunicatorCorp\Client\EnumerationType\Factory\EnumerationTypeFactory;

/**
 * Tests the factory for enumeration objects
 *
 * @package CommunicatorCorp\Client
 * @author  Daniel Morris <daniel@rippleffect.com>
 */
class EnumerationTypeFactoryTest extends \PHPUnit_Framework_TestCase
{
    /**
     * Tests the enumeration object factory correctly creates enumeration objects
     *
     * @dataProvider enumProvider
     *
     * @param string $enumName The name of the enumeration object
     * @param mixed $value The value of the enumeration object
     *
     * @return void
     */
    public function testFactory($enumName, $value)
    {
        $factory = new EnumerationTypeFactory();
        $enum = $factory->factory($enumName, $value);

        $this->assertInstanceOf('MyCLabs\Enum\Enum', $enum);
        $this->assertEquals($value, $enum->getValue());
    }

    /**
     * Tests that an `\InvalidArgumentException` is thrown for invalid enumeration objects
     *
     * @expectedException \InvalidArgumentException
     *
     * @return void
     */
    public function testUnknownEnum()
    {
        $factory = new EnumerationTypeFactory();

        $factory->factory('UnknownEnum', 1597463007);
    }

    /**
     * Tests that an enumeration object cannot be instantiated with an invalid value
     *
     * @expectedException \UnexpectedValueException
     *
     * @return void
     */
    public function testEnumWithInvalidValue()
    {
        $factory = new EnumerationTypeFactory();

        $factory->factory('MailingType', 1597463007);
    }

    /**
     * Enumeration object provider
     *
     * @return array
     */
    public function enumProvider()
    {
        return [
            ['ControlCommand', 'Authorise'],
            ['ControlCommand', 'Pause'],
            ['ControlCommand', 'Resume'],
            ['ControlCommand', 'Cancel'],
            ['DataExtractColumnType', 'ClientTableColumn'],
            ['DataExtractColumnType', 'FixedValue'],
            ['DataImportStatus', 'AwaitingAuthorisation'],
            ['DataImportStatus', 'AwaitingImporting'],
            ['DataImportStatus', 'Preparing'],
            ['DataImportStatus', 'Pending'],
            ['DataImportStatus', 'Importing'],
            ['DataImportStatus', 'Pausing'],
            ['DataImportStatus', 'Paused'],
            ['DataImportStatus', 'PausedOnError'],
            ['DataImportStatus', 'Cancelled'],
            ['DataImportStatus', 'CancelledOnDataError'],
            ['DataImportStatus', 'Complete'],
            ['DataImportStatus', 'Failed'],
            ['DataImportUpdateMethod', 'Insert'],
            ['DataImportUpdateMethod', 'Update'],
            ['DataImportUpdateMethod', 'Upsert'],
            ['DataType', 'Currency'],
            ['DataType', 'Date/Time'],
            ['DataType', 'Decimal'],
            ['DataType', 'HTML'],
            ['DataType', 'Large Whole Numbers'],
            ['DataType', 'Long HTML'],
            ['DataType', 'Long Text'],
            ['DataType', 'Other Email Address'],
            ['DataType', 'Other Mobile Number'],
            ['DataType', 'Text'],
            ['DataType', 'True/False'],
            ['DataType', 'Unique Identifier'],
            ['DataType', 'Whole Numbers'],
            ['ExtractionScope', 'Extended'],
            ['ExtractionScope', 'Standard'],
            ['ImportResult', 'FailedInserting'],
            ['ImportResult', 'FailedUpdating'],
            ['ImportResult', 'SuccessInserting'],
            ['ImportResult', 'SuccessUpdating'],
            ['ImportResult', 'PrimaryKeyViolation'],
            ['ImportResult', 'ForeignKeyViolation'],
            ['ImportResult', 'ColumnMappingFailure'],
            ['ImportResult', 'ColumnsNotInTable'],
            ['ImportResult', 'NoRequiredColumnInTable'],
            ['ImportResult', 'ColumnRequired'],
            ['ImportResult', 'DuplicateColumnMapping'],
            ['ImportResult', 'NoChangeToExistingContact'],
            ['JobStatus', 'New'],
            ['JobStatus', 'Processing'],
            ['JobStatus', 'Complete'],
            ['JobType', 'Bounces'],
            ['JobType', 'Opens'],
            ['JobType', 'Clicks'],
            ['JobType', 'Conversions'],
            ['JobType', 'DispatchUnsubscribes'],
            ['JobType', 'TableDataExtract'],
            ['JobType', 'MailingListExtract'],
            ['JobType', 'Sent'],
            ['JoinType', 'Inner'],
            ['JoinType', 'Outer'],
            ['MailingType', 'Email'],
            ['MailingType', 'Sms'],
            ['ParameterType', 'Ignore'],
            ['ParameterType', 'Column'],
            ['ParameterType', 'Fixed'],
            ['ParameterType', 'Custom'],
            ['SortOrder', 'OldestFirst'],
            ['SortOrder', 'NewestFirst'],
            ['SqlCondition', 'AND'],
            ['SqlCondition', 'OR'],
            ['SqlCondition', 'None'],
            ['SubscriberSearchType', 'All'],
            ['SubscriberSearchType', 'OnlySubscribed'],
            ['SubscriberSearchType', 'OnlyExplicitlyUnsubscribed'],
            ['SubscriptionSourceType', 'TestCase'],
            ['SubscriptionSourceType', 'DataImport'],
            ['SubscriptionSourceType', 'DataCaptureForm'],
            ['SubscriptionSourceType', 'ManualEntry'],
            ['SubscriptionSourceType', 'WebService'],
            ['SubscriptionSourceType', 'SubscriptionConfirmation'],
            ['SubscriptionType', 'SingleOptIn'],
            ['SubscriptionType', 'DoubleOptIn'],
            ['SubscriptionUpdateMethod', 'SubscribeAll'],
            ['SubscriptionUpdateMethod', 'UnsubscribeAll'],
            ['SubscriptionUpdateMethod', 'HonourExistingUnsubscribes'],
            ['TableType', 'Contact'],
            ['TableType', 'Data'],
            ['TableType', 'Lookup'],
            ['TriggeredDispatchMethod', 'OnlySendToNewSubscribers'],
            ['TriggeredDispatchMethod', 'SendToAllSubscribers'],
        ];
    }
}
