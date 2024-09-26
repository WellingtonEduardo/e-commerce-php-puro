<?php

declare(strict_types=1);

ini_set('display_errors', 1);
ini_set('display_startup_errors', 1);
error_reporting(E_ALL);

use App\Models\Product;

require __DIR__ . '/../vendor/autoload.php';

$products = Product::all();
$productsFiltered = array_filter($products, static fn ($product) => $product['is_available']);
$title = 'My WebStore';
$titlePage = 'Home';

require __DIR__ . '/../resources/views/index.php';