<?php
require_once 'inc/all.php';
$product_caller = new ProductDatabaseCaller( $pdo );
$products       = $product_caller->fetchAll();


render( __DIR__ . '/views/index.view.php', [
	'products' => $products,
	'login'    => $login
] );
