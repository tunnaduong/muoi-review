<?php

require_once __DIR__ . '/router.php';

// ##################################################
// ##################################################
// ##################################################

get('/', 'views/index.php');

any("/api/add-product", "api/add_product.php");

get('/api/get-products', 'api/get_products.php');

any('/api/upload-image', 'api/upload_image.php');

get('/api/remove-product', 'api/remove_product.php');

// ##################################################
// ##################################################
// ##################################################
// any can be used for GETs or POSTs

// For GET or POST
// The 404.php which is inside the views folder will be called
// The 404.php has access to $_GET and $_POST
any('/404', 'views/404.php');
