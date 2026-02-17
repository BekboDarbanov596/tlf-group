<?php

namespace App\Models;

use App\Core\Database;

class User
{
    public static function create($data)
    {
        $db = Database::getInstance();
        $sql = "INSERT INTO users (full_name, email, password_hash, region, activity_type, phone, show_phone) 
                VALUES (?, ?, ?, ?, ?, ?, ?)";
        $db->query($sql, [
            $data['full_name'],
            $data['email'],
            password_hash($data['password'], PASSWORD_ARGON2ID),
            $data['region'],
            $data['activity_type'],
            $data['phone'] ?? null,
            $data['show_phone'] ?? 0
        ]);
        return $db->lastInsertId();
    }

    public static function findByEmail($email)
    {
        $db = Database::getInstance();
        return $db->fetch("SELECT * FROM users WHERE email = ? AND is_active = 1", [$email]);
    }

    public static function findById($id)
    {
        $db = Database::getInstance();
        return $db->fetch("SELECT * FROM users WHERE id = ?", [$id]);
    }
}
