<?php
// DELETE /api/categories/
// Body: { "id": 1 }

$data = json_decode(file_get_contents('php://input'));

$id = isset($data->id) ? $data->id : (isset($_GET['id']) ? $_GET['id'] : null);

if (empty($id)) {
    echo json_encode(['message' => 'Missing Required Parameters']);
    return;
}

$category->id = (int)$id;
$result = $category->delete();

if ($result) {
    echo json_encode($result);
} else {
    echo json_encode(['message' => 'category_id Not Found']);
}
