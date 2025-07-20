<?php

namespace App\Controllers\Front;

use App\Core\BaseController;
use App\Models\Task;

class TaskController extends BaseController
{

    private $taskModel;

    function __construct()
    {
        $this->taskModel = new Task();
    }


    public function index()
    {
        $tasks = $this->taskModel->getAll();

        $this->render('front/task', ['tasks' => $tasks]);
    }

    public function create()
    {
        if ($_SERVER['REQUEST_METHOD'] === 'POST') {
            $title = $_POST['title'] ?? null;
            $description = $_POST['description'] ?? null;

            if (empty($title) || empty($description)) {
                return $this->render('front/create-task', ['error' => 'Başlık ve açıklama alanlarını boş bırakmayınız.']);

            }

            try {
                $this->taskModel->create($title, $description);
                return $this->render('front/task', [
                    'success' => "Görev Başarıyla Oluşturuldu",
                    'tasks' => $this->taskModel->getAll()
                ]);
            } catch (\Exception $e) {
                return $this->render('front/create-task', ['error' => "Görev Oluşturulamadı"]);
            }
        } else {
            $this->render('front/create-task');
        }
    }

    public function update($id)
    {
        $task = $this->taskModel->getById($id);
        if ($_SERVER['REQUEST_METHOD'] === 'POST') {
            $title = $_POST['title'] ?? null;
            $description = $_POST['description'] ?? null;


            if (empty($title) || empty($description)) {
                return $this->render('front/update-task', [
                    'error' => 'Başlık ve açıklama alanları boş bırakılamaz.',
                    'task' => $task
                ]);
            }

            try {
                $this->taskModel->update($id, $title, $description);
                $task = $this->taskModel->getById($id);
                return $this->render('front/update-task', [
                    'success' => "Görev başarıyla güncellendi",
                    'task' => $task
                ]);
            } catch (\Exception $e) {
                return $this->render('front/update-task', [
                    'error' => "Görev güncellemesi başarısız.",
                    'task' => $task
                ]);
            }
        } else {


            if (!$task) {
                return $this->render('front/update-task', ['error' => 'Görev bulunamadı.']);
            }
            return $this->render('front/update-task', ['task' => $task]);
        }
    }

    public function delete($id)
    {
        $task = $this->taskModel->getById($id);

        if ($this->taskModel->delete($id)) {
            return $this->render('front/task', [
                'success' => 'Görev başarıyla silindi.',
                'tasks' => $this->taskModel->getAll()
            ]);
        }
        else {
            return $this->render('front/task', [
                'error' => 'Görev silinemedi.'
            ]);
        }
    }
}


?>