<?php

namespace ProductFeeder\Adapter\Platform;

class Google implements Platform {

    private $products = array();

    public function normalize(array $products) {
        foreach($products as $product) {
            $this->products[] =  [
                "id" => $product->getId(),
                "title" => $product->getName(),
                "description" =>"",
                "link" => "",
                "image_link" => "",
                "price" => $product->getPrice(),
                "product_type" => $product->getCategory()
            ];
        }
    }

    public function getProducts():array {
        return $this->products;
    }
}