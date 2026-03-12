<?php
// GET /api/quotes/
// GET /api/quotes/?author_id=1
// GET /api/quotes/?category_id=1
// GET /api/quotes/?author_id=1&category_id=1
// GET /api/quotes/?random=true  (extra credit)

$author_id   = isset($_GET['author_id'])   ? (int)$_GET['author_id']   : null;
$category_id = isset($_GET['category_id']) ? (int)$_GET['category_id'] : null;
$random      = isset($_GET['random'])       && $_GET['random'] === 'true';

$stmt = $quote->read($author_id, $category_id, $random);

if ($stmt->rowCount() > 0) {
    $results = $stmt->fetchAll(PDO::FETCH_OBJ);
    if ($random) {
        echo json_encode($results[0]);
    } else {
        echo json_encode($results);
    }
} else {
    echo json_encode(['message' => 'No Quotes Found']);
}
