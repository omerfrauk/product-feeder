<?php

namespace ProductImporter\Adapter\Output;

class Json implements Output {

    public function render(array $products):string {
        return json_encode($products);
    }
}