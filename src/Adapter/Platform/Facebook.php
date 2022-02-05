<?php

namespace ProductImporter\Adapter\Platform;

class Facebook implements Platform {

    private $products = array();

    public function normalize(array $products) {
       foreach($products as $product)
           $this->products[] = [
            'id' => $product->getId(),
            'title' => $product->getName(),
            'price' => $product->getPrice(),
            'product_type' => $product->getCategory()
        ];
    }

    public function getProducts():array {
        return $this->products;
    }
}