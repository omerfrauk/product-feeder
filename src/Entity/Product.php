<?php

namespace ProductImporter\Entity;

class Product {

    private $id;
    private $name;
    private $price;
    private $category;

    /**
     * @param $id
     * @param $name
     * @param $price
     * @param $category
     */
    public function __construct($id, $name, $price, $category) {
        $this->id = $id;
        $this->name = $name;
        $this->price = $price;
        $this->category = $category;
    }

    /**
     * @return mixed
     */
    public function getId() {
        return $this->id;
    }

    /**
     * @return mixed
     */
    public function getName() {
        return $this->name;
    }

    /**
     * @return mixed
     */
    public function getPrice() {
        return $this->price;
    }

    /**
     * @return mixed
     */
    public function getCategory() {
        return $this->category;
    }
}