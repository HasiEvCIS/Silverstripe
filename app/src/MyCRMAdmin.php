<?php

use SilverStripe\Admin\ModelAdmin;

class MyCRMAdmin extends ModelAdmin
{
    private static $managed_models = array(
		//Hasitha Madushanka -- Item 3
		// Have the Customer show as "Client" without changing the class name of the object
		Customer::class => [
            'title' => 'Client'
        ],

		//Hasitha Madushanka -- Item 3

		
		'HostingContract',
		'HostingType'
	);

    private static $url_segment = 'mycrm';

	private static $menu_title = 'My CRM';

	public function SearchClassSelector()
    {
	    return "dropdown";
	}
}

