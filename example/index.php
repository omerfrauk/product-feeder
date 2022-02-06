<?php
    require_once("../vendor/autoload.php");

    use ProductFeeder\Utils\Utility;
    use ProductFeeder\Entity\Product;
    use ProductFeeder\ProductFeeder;


    $utility = new Utility();
    $json = $utility->readJsonFile("/var/www/product-importer/example/assets/products.json");
    $products  = array();

    foreach($json as $product) {
        $products[] = new Product($product->id, $product->name, $product->price, $product->category);
    }

    $productFeeder = new ProductFeeder();
    try {
        $export = $productFeeder->export($products, 'Facebook', 'Xml');
        print_r($export);
    }
    catch (\Exception $exception) {
        error_log($exception->getMessage(),LOG_ERR,$exception->getFile());
    }