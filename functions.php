<?php 

    // require mysql connection 
    require 'database/DBController.php';

    // require mysql connection 
    require 'database/Product.php';

    // require cart class
    require 'database/Cart.php';

    // DBController Object
    $db = new DBController();

    // Product object
    $product = new Product($db);
    $product_shuffle = $product->getData();

    //print_r($product->getData());

    // Cart Object
    $Cart = new Cart($db);
    

?>