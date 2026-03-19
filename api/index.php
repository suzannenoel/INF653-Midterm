<?php
header('Access-Control-Allow-Origin: *');
header('Content-Type: application/json');

echo json_encode([
    'message' => 'Quotes REST API',
    'endpoints' => [
        'quotes'     => '/api/quotes/',
        'authors'    => '/api/authors/',
        'categories' => '/api/categories/'
    ]
]);
