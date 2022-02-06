<?php

namespace ProductFeeder\Adapter\Output;

use SimpleXMLElement;

class Xml implements Output {

    public function render(array $products) {
        $object = new SimpleXMLElement("<products/>");
        $this->handleToXML($object,$products);
        return $object;
    }

    private function handleToXML(SimpleXMLElement $object, array $products) {
        foreach ($products as $key => $value) {
            if (is_array($value)) {
                $new_object = $object->addChild($key);
                $this->handleToXML($new_object, $value);
            }
            else {
                // if the key is an integer, it needs text with it to actually work.
                if ($key != 0 && $key == (int) $key) {
                    $key = "key_$key";
                }
                $object->addChild($key, $value);
            }
        }
    }
}