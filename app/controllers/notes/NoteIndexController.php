<?php

require_once __DIR__ . '/../../../config/database.php';

$userId = 1;

$statement = $pdo->prepare("
    SELECT *
    FROM notes
    WHERE user_id = :user_id
    ORDER BY created_at DESC
");

$statement->execute([
    'user_id' => $userId
]);

$notes = $statement->fetchAll(PDO::FETCH_ASSOC);

require_once __DIR__ . '/../../views/notes/index.php';