<?php
// GET /api/authors/

$stmt = $author->read();

if ($stmt->rowCount() > 0) {
    echo json_encode($stmt->fetchAll(PDO::FETCH_OBJ));
} else {
    echo json_encode(['message' => 'author_id Not Found']);
}
