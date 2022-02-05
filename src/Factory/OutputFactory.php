<?php

namespace ProductImporter\Factory;

use ProductImporter\Adapter\Output\Json;
use ProductImporter\Adapter\Output\Output;
use ProductImporter\Adapter\Output\Xml;

class OutputFactory {

    public function callOutput($output):?Output {
        if($output == "Json") {
            return new Json();
        }
        else if($output == "Xml") {
            return new Xml();
        }

        return null;
    }
}