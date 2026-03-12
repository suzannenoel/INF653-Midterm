<?php
// DELETE /api/authors/
// Body: { "id": 1 }

$data = json_decode(file_get_contents('php://input'));

$id = isset($data->id) ? $data->id : (isset($_GET['id']) ? $_GET['id'] : null);

if (empty($id)) {
    echo json_encode(['message' => 'Missing Required Parameters']);
    return;
}

$author->id = (int)$id;
$result = $author->delete();

if ($result) {
    echo json_encode($result);
} else {
    echo json_encode(['message' => 'author_id Not Found']);
}
