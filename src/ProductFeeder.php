<?php

namespace ProductFeeder;

use ProductFeeder\Factory\OutputFactory;
use ProductFeeder\Factory\VendorFactory;

class ProductFeeder {

    private $vendorFactory;
    private $outputFactory;

    public function __construct() {
        $this->vendorFactory = new VendorFactory();
        $this->outputFactory = new OutputFactory();
    }

    public function export(Array $products, $platformName = null, $outputType = "json") {

        if($platformName) {
            if(!class_exists("ProductFeeder\\Adapter\\Platform\\".$platformName)) {
                throw new \Exception("Built-in Platform Not Found",1200);
            }
        }
        else {
            throw new \Exception("No Platform specified", 1201);
        }

        $vendor = $this->vendorFactory->callVendor($platformName);
        $vendor->normalize($products);
        $normalized = $vendor->getProducts();

        $type = $this->outputFactory->callOutput($outputType);

        return $type->render($normalized);
    }
}