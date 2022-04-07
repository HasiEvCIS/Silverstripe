<?php

use SilverStripe\ORM\DataObject;

class HostingContract extends DataObject
{
	private static $db = [
        'ContractNumber' => 'Varchar',
        'StartDate' => 'Date',
        'EndDate' => 'Date',
    ];

    private static $has_one = [
        'Customer' => Customer::class,
        'HostingType' => HostingType::class,
    ];

    private static $summary_fields = [
        'ContractNumber',
        'EndDate',
    ];
}
