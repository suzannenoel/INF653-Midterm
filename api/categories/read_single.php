<?php
// GET /api/categories/?id=1

$category->id = (int)$_GET['id'];
$stmt = $category->read_single();

if ($stmt->rowCount() > 0) {
    echo json_encode($stmt->fetch(PDO::FETCH_OBJ));
} else {
    echo json_encode(['message' => 'category_id Not Found']);
}
