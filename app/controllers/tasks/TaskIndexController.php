<?php

require_once __DIR__ . '/../../../config/database.php';

$userId = 2;

$statement = $pdo->prepare("
    SELECT *
    FROM tasks
    WHERE user_id = :user_id
    ORDER BY created_at DESC
");

$statement->execute([
    'user_id' => $userId,
]);

$tasks = $statement->fetchAll(PDO::FETCH_ASSOC);

require_once __DIR__ . '/../../views/tasks/index.php';
