<?php
// POST /api/categories/
// Body: { "category": "Name Here" }

$data = json_decode(file_get_contents('php://input'));

if (empty($data->category)) {
    echo json_encode(['message' => 'Missing Required Parameters']);
    return;
}

$category->category = $data->category;
$result = $category->create();

if ($result) {
    http_response_code(201);
    echo json_encode($result);
} else {
    echo json_encode(['message' => 'Category Not Created']);
}
