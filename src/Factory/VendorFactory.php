<?php

namespace ProductImporter\Factory;

use ProductImporter\Adapter\Platform\Platform;
use ProductImporter\Adapter\Platform\Facebook;
use ProductImporter\Adapter\Platform\Google;

 class VendorFactory {

     public function callVendor($vendor): ?Platform {
        if($vendor == "Facebook") {
            return new Facebook();
        }
        else if($vendor == "Google") {
            return new Google();
        }

        return null;
    }
}