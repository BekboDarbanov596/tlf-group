<?php
require_once __DIR__ . '/src/Core/Database.php';

use App\Core\Database;

try {
    $db = Database::getInstance();
    $sql = file_get_contents(__DIR__ . '/database/init.sql');

    // Split SQL into individual statements
    $statements = array_filter(array_map('trim', explode(';', $sql)));

    foreach ($statements as $stmtSql) {
        if (!empty($stmtSql)) {
            $db->query($stmtSql);
        }
    }

    echo "Database initialized successfully.\n";
} catch (Exception $e) {
    echo "Error: " . $e->getMessage() . "\n";
}
