<?php declare(strict_types=1) ?>
<body>
<?php
require_once __DIR__ . '/Sky.php';
require_once __DIR__ . '/Bird.php';
require_once __DIR__ . '/Airplane.php';

$sky = new Sky();

$bird = new Bird();
$sky->draw($bird);

$airplane = new Airplane();
$sky->draw($airplane);
?>
</body>
