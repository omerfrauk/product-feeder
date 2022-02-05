<?php
    require_once("../vendor/autoload.php");

    use ProductImporter\Utils\Utility;
    use ProductImporter\Entity\Product;
    use ProductImporter\ProductImporter;


    $utility = new Utility();
    $json = $utility->readJsonFile("/var/www/product-importer/example/assets/products.json");
    $products  = array();

    foreach($json as $product) {
        $products[] = new Product($product->id, $product->name, $product->price, $product->category);
    }

    $productImporter = new ProductImporter();
    try {
        $export = $productImporter->export($products, 'Facebook', 'Xml');
        print_r($export);
    }
    catch (\Exception $exception) {
        error_log($exception->getMessage(),LOG_ERR,$exception->getFile());
    }