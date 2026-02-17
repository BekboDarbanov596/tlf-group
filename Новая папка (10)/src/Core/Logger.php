<?php

namespace App\Core;

class Logger
{
    public static function log($action, $details = null)
    {
        $db = Database::getInstance();
        $userId = $_SESSION['user_id'] ?? null;
        $ip = $_SERVER['REMOTE_ADDR'] ?? 'unknown';

        $sql = "INSERT INTO audit_logs (user_id, action, ip_address, details) VALUES (?, ?, ?, ?)";
        $db->query($sql, [$userId, $action, $ip, $details]);
    }
}
