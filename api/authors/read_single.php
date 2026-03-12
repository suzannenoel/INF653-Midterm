<?php
// GET /api/authors/?id=1

$author->id = (int)$_GET['id'];
$stmt = $author->read_single();

if ($stmt->rowCount() > 0) {
    echo json_encode($stmt->fetch(PDO::FETCH_OBJ));
} else {
    echo json_encode(['message' => 'author_id Not Found']);
}
