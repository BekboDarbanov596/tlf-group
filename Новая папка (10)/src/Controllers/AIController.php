<?php

namespace App\Controllers;

use App\Core\Controller;
use App\Models\Plot;
use App\Models\CropHistory;
use App\Models\AnalysisRequest;
use App\Models\User;
use App\Core\Logger;

class AIController extends Controller
{
    public function __construct()
    {
        if (!isset($_SESSION['user_id'])) {
            $this->redirect('/login');
        }
    }

    // A) Plan Mode
    public function planView()
    {
        $plots = Plot::all($_SESSION['user_id']);
        return $this->view('analysis/plan', ['plots' => $plots]);
    }

    public function generatePlan()
    {
        $plotId = $_POST['plot_id'];
        $plot = Plot::find($plotId);
        $history = CropHistory::getByPlot($plotId);

        // Mock AI Logic for Plan
        $response = "## План севооборота для '{$plot['title']}' на 2026-2027 гг.\n\n" .
            "**Краткое объяснение:** На основе того, что в прошлом году росла культура '" . ($history[0]['culture'] ?? 'неизвестно') . "', мы рекомендуем смену типа питания почвы.\n\n" .
            "**Календарь работ:**\n" .
            "- Март: Подготовка почвы (азотные удобрения).\n" .
            "- Апрель: Посев бобовых.\n" .
            "- Июль-Август: Сбор урожая.\n\n" .
            "**Риски:** Возможен дефицит влаги в августе. Рекомендуется капельное орошение.";

        AnalysisRequest::create($_SESSION['user_id'], 'plan', ['plot_id' => $plotId], null, $response);
        Logger::log('generate_plan', "Plot ID: $plotId");

        return $this->view('analysis/result', ['title' => 'План развития участка', 'result' => $response]);
    }

    // B) Plant Mode
    public function plantView()
    {
        return $this->view('analysis/plant');
    }

    public function analyzePlant()
    {
        // Image upload logic (omitted for brevity, simulated path)
        $imagePath = 'uploads/plant_' . time() . '.jpg';

        $response = "## Анализ растения по фото\n\n" .
            "**Топ-3 возможные проблемы:**\n" .
            "1. Фитофтороз (85%)\n" .
            "2. Недостаток магния (10%)\n" .
            "3. Ожог от солнца (5%)\n\n" .
            "**Что проверить:** Посмотрите на нижнюю сторону листа на наличие белого налета.\n\n" .
            "**Действия сейчас:**\n" .
            "1. Изолировать пораженные кусты.\n" .
            "2. Обработать фунгицидом.\n\n" .
            "**Профилактика:** Избегайте полива по листьям в вечернее время.";

        AnalysisRequest::create($_SESSION['user_id'], 'plant', $_POST, $imagePath, $response);
        Logger::log('analyze_plant');

        return $this->view('analysis/result', ['title' => 'Результат анализа растения', 'result' => $response]);
    }

    // C) Animal Mode
    public function animalView()
    {
        return $this->view('analysis/animal');
    }

    public function analyzeAnimal()
    {
        $user = User::findById($_SESSION['user_id']);
        $region = $user['region'];

        $response = "## Анализ состояния животного\n\n" .
            "**Возможные причины:**\n" .
            "1. Тимпания (вздутие)\n" .
            "2. Кормовое отравление\n" .
            "3. Инфекционный гастрит\n\n" .
            "**Красные флаги:** Если частота дыхания > 60 в минуту — срочно зовите врача.\n\n" .
            "**Что измерить:** Температуру ректально (норма 38.5-39.5).";

        AnalysisRequest::create($_SESSION['user_id'], 'animal', $_POST, null, $response);

        // Find vets in region
        $db = \App\Core\Database::getInstance();
        $vets = $db->fetchAll("SELECT full_name, phone FROM users WHERE region = ? AND activity_type = 'vet' AND show_phone = 1", [$region]);

        Logger::log('analyze_animal');

        return $this->view('analysis/result', [
            'title' => 'Рекомендации по животному',
            'result' => $response,
            'vets' => $vets,
            'region' => $region
        ]);
    }
}
