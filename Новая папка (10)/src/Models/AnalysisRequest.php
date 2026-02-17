<?php

namespace App\Models;

use App\Core\Database;

class AnalysisRequest
{
    public static function create($userId, $type, $inputData, $imagePath = null, $aiResponse = null)
    {
        $db = Database::getInstance();
        $db->query("INSERT INTO analysis_requests (user_id, type, input_data, image_path, ai_response) VALUES (?, ?, ?, ?, ?)", [
            $userId,
            $type,
            json_encode($inputData),
            $imagePath,
            $aiResponse
        ]);
        return $db->lastInsertId();
    }

    public static function getHistory($userId)
    {
        $db = Database::getInstance();
        return $db->fetchAll("SELECT * FROM analysis_requests WHERE user_id = ? ORDER BY created_at DESC", [$userId]);
    }
}
