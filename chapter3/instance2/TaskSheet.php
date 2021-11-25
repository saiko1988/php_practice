<?php
declare(strict_types=1);

require_once __DIR__ . '/Task.php';

class TaskSheet
{
    public $tasks = [];

    public function addTask(Task $task): void
    {
        $this->tasks[] = $task;
        echo $task->name, 'を追加しました。' . PHP_EOL;
    }

    public function show(): void
    {
        foreach ($this->tasks as $task) {
            if ($task->isCompleted()) {
                echo '<strong>', $task->name, '</strong>', PHP_EOL;
            } else {
                echo $task->name, PHP_EOL;
            }
        }
    }
}
