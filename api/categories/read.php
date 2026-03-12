<?php
// GET /api/categories/

$stmt = $category->read();

if ($stmt->rowCount() > 0) {
    echo json_encode($stmt->fetchAll(PDO::FETCH_OBJ));
} else {
    echo json_encode(['message' => 'category_id Not Found']);
}
