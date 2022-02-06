<?php

namespace ProductFeeder\Factory;

use ProductFeeder\Adapter\Output\Json;
use ProductFeeder\Adapter\Output\Output;
use ProductFeeder\Adapter\Output\Xml;

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