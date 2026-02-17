<?php
require_once __DIR__ . '/src/Core/Database.php';

use App\Core\Database;

echo "--- AI Agro Care System Check ---\n";

try {
    $db = Database::getInstance();
    echo "[OK] Database connection successful.\n";

    $tables = ['users', 'plots', 'crop_history', 'analysis_requests', 'audit_logs'];
    foreach ($tables as $table) {
        $res = $db->fetch("SELECT name FROM sqlite_master WHERE type='table' AND name=?", [$table]);
        if ($res) {
            echo "[OK] Table '$table' exists.\n";
            if ($table === 'plots') {
                $cols = $db->fetchAll("PRAGMA table_info(plots)");
                $colNames = array_column($cols, 'name');
                $required = ['latitude', 'longitude', 'boundary_geojson'];
                foreach ($required as $req) {
                    if (in_array($req, $colNames)) {
                        echo "[OK] Column 'plots.$req' exists.\n";
                    } else {
                        echo "[FAIL] Column 'plots.$req' is missing!\n";
                    }
                }
            }
        } else {
            echo "[FAIL] Table '$table' is missing!\n";
        }
    }

    echo "[OK] Checking directory permissions...\n";
    $dirs = ['database', 'uploads', 'logs'];
    foreach ($dirs as $dir) {
        $path = __DIR__ . '/' . $dir;
        if (is_writable($path)) {
            echo "[OK] Directory '$dir' is writable.\n";
        } else {
            echo "[FAIL] Directory '$dir' is NOT writable!\n";
        }
    }

} catch (Exception $e) {
    echo "[FATAL ERROR] " . $e->getMessage() . "\n";
}

echo "--- Check complete ---\n";
