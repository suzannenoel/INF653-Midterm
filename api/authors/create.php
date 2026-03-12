<?php
// POST /api/authors/
// Body: { "author": "Name Here" }

$data = json_decode(file_get_contents('php://input'));

if (empty($data->author)) {
    echo json_encode(['message' => 'Missing Required Parameters']);
    return;
}

$author->author = $data->author;
$result = $author->create();

if ($result) {
    http_response_code(201);
    echo json_encode($result);
} else {
    echo json_encode(['message' => 'Author Not Created']);
}
