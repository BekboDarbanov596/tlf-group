<?php
require_once __DIR__ . '/src/Core/Database.php';

use App\Core\Database;

try {
    $db = Database::getInstance();
    // Only add boundary_geojson
    $db->query("ALTER TABLE plots ADD COLUMN boundary_geojson TEXT");
    echo "Migration (boundary_geojson) completed successfully.\n";
} catch (Exception $e) {
    if (strpos($e->getMessage(), 'duplicate column name') !== false) {
        echo "Column already exists, skipping.\n";
    } else {
        echo "Error: " . $e->getMessage() . "\n";
    }
}
