<?php

namespace App\Models;

use App\Core\Database;

class Plot
{
    public static function all($userId)
    {
        $db = Database::getInstance();
        return $db->fetchAll("SELECT * FROM plots WHERE user_id = ? AND is_active = 1", [$userId]);
    }

    public static function create($userId, $data)
    {
        $db = Database::getInstance();
        $db->query("INSERT INTO plots (user_id, title, area, soil_type, irrigation, latitude, longitude, boundary_geojson) VALUES (?, ?, ?, ?, ?, ?, ?, ?)", [
            $userId,
            $data['title'],
            $data['area'],
            $data['soil_type'],
            $data['irrigation'] ?? 0,
            $data['latitude'] ?? null,
            $data['longitude'] ?? null,
            $data['boundary_geojson'] ?? null
        ]);
        return $db->lastInsertId();
    }

    public static function find($id)
    {
        $db = Database::getInstance();
        return $db->fetch("SELECT * FROM plots WHERE id = ?", [$id]);
    }
}
