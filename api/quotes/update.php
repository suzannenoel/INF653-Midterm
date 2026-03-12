<?php
// PUT /api/quotes/
// Body: { "id": 1, "quote": "...", "author_id": 1, "category_id": 1 }

$data = json_decode(file_get_contents('php://input'));

if (
    empty($data->id) ||
    empty($data->quote) ||
    !isset($data->author_id) ||
    !isset($data->category_id)
) {
    echo json_encode(['message' => 'Missing Required Parameters']);
    return;
}

$quote->id = (int)$data->id;
if (!$quote->exists()) {
    echo json_encode(['message' => 'No Quotes Found']);
    return;
}

$author->id = (int)$data->author_id;
if (!$author->exists()) {
    echo json_encode(['message' => 'author_id Not Found']);
    return;
}

$category->id = (int)$data->category_id;
if (!$category->exists()) {
    echo json_encode(['message' => 'category_id Not Found']);
    return;
}

$quote->quote       = $data->quote;
$quote->author_id   = (int)$data->author_id;
$quote->category_id = (int)$data->category_id;

$result = $quote->update();
if ($result) {
    echo json_encode($result);
} else {
    echo json_encode(['message' => 'Quote Not Updated']);
}
