<?php
// DELETE /api/quotes/
// Body: { "id": 1 }

$data = json_decode(file_get_contents('php://input'));

$id = isset($data->id) ? $data->id : (isset($_GET['id']) ? $_GET['id'] : null);

if (empty($id)) {
    echo json_encode(['message' => 'Missing Required Parameters']);
    return;
}

$quote->id = (int)$id;
if (!$quote->exists()) {
    echo json_encode(['message' => 'No Quotes Found']);
    return;
}

$result = $quote->delete();
if ($result) {
    echo json_encode($result);
} else {
    echo json_encode(['message' => 'Quote Not Deleted']);
}
