<?php

use SilverStripe\ORM\DataObject;

class HostingType extends DataObject
{
    private static $db = [
        'Title' => 'Text',
        'Description' => 'Text',
        'Price' => 'Float',
    ];

    private static $has_many = [
        'HostingContracts' => HostingContract::class,
    ];
}
