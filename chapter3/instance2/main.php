<?php
/**
 * メインルーチン
 */
declare(strict_types=1) ?>
<body>
<?php
require_once __DIR__ . '/Task.php';
require_once __DIR__ . '/TaskSheet.php';

$taskSheet = new TaskSheet();

$task1 = new Task();
$task1->name = 'パスポートの更新';
$task1->progress = 100;
$taskSheet->addTask($task1);

$task2 = new Task();
$task2->name = '食材の買い出し';
$task2->progress = 50;
$taskSheet->addTask($task2);

echo PHP_EOL, '●タスクリストを表示します...', PHP_EOL;
$taskSheet->show();
?>
</body>