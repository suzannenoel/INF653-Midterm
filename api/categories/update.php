<?php
// PUT /api/categories/
// Body: { "id": 1, "category": "Updated Name" }

$data = json_decode(file_get_contents('php://input'));

if (empty($data->id) || empty($data->category)) {
    echo json_encode(['message' => 'Missing Required Parameters']);
    return;
}

$category->id       = (int)$data->id;
$category->category = $data->category;

$result = $category->update();

if ($result) {
    echo json_encode($result);
} else {
    echo json_encode(['message' => 'category_id Not Found']);
}
