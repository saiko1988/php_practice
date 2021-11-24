<?php
/** */
declare(strict_types=1) ?>
<body>
<?php
require_once __DIR__ . '/Task.php';

$task1 = new Task();
$task1->name = 'パスポートの更新';
$task1->progress = 100;
if ($task1->isCompleted() === true) {
    echo $task1->name, 'は完了しました。' . PHP_EOL;
} else {
    echo $task1->name, 'は未完了です。' . PHP_EOL;
}

$task2 = new Task();
$task2->name = '食材の買い出し';
$task2->progress = 50;
if ($task2->isCompleted() === true) {
    echo $task2->name, 'は完了しました。' . PHP_EOL;
} else {
    echo $task2->name, 'は未完了です。' . PHP_EOL;
}
?>
</body>