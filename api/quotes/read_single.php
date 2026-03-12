<?php
// GET /api/quotes/?id=1

$quote->id = (int)$_GET['id'];
$stmt = $quote->read_single();

if ($stmt->rowCount() > 0) {
    echo json_encode($stmt->fetch(PDO::FETCH_OBJ));
} else {
    echo json_encode(['message' => 'No Quotes Found']);
}
