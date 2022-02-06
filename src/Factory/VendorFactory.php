<?php

namespace ProductFeeder\Factory;

use ProductFeeder\Adapter\Platform\Platform;
use ProductFeeder\Adapter\Platform\Facebook;
use ProductFeeder\Adapter\Platform\Google;

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