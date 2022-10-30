<?php

use SilverStripe\Admin\ModelAdmin;

class MyCRMAdmin extends ModelAdmin
{
    private static $managed_models = array(
		'Customer',
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

