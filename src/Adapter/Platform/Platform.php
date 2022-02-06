<?php

namespace ProductFeeder\Adapter\Platform;

interface Platform {
    public function normalize(array $products);
    public function getProducts():array;
}