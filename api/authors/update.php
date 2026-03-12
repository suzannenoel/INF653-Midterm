<?php
// PUT /api/authors/
// Body: { "id": 1, "author": "Updated Name" }

$data = json_decode(file_get_contents('php://input'));

if (empty($data->id) || empty($data->author)) {
    echo json_encode(['message' => 'Missing Required Parameters']);
    return;
}

$author->id     = (int)$data->id;
$author->author = $data->author;

$result = $author->update();

if ($result) {
    echo json_encode($result);
} else {
    echo json_encode(['message' => 'author_id Not Found']);
}
