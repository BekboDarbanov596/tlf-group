<?php

namespace App\Models;

use App\Core\Database;

class CropHistory
{
    public static function getByPlot($plotId)
    {
        $db = Database::getInstance();
        return $db->fetchAll("SELECT * FROM crop_history WHERE plot_id = ? AND is_active = 1 ORDER BY year DESC", [$plotId]);
    }

    public static function add($plotId, $year, $culture, $notes = '')
    {
        $db = Database::getInstance();
        $db->query("INSERT INTO crop_history (plot_id, year, culture, notes) VALUES (?, ?, ?, ?)", [
            $plotId,
            $year,
            $culture,
            $notes
        ]);
    }
}
