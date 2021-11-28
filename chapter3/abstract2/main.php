<?php declare(strict_types=1) ?>
<body>
    <pre>
<?php
require_once __DIR__ . '/Canvas.php';
require_once __DIR__ . '/DigitalClock.php';
require_once __DIR__ . '/AnalogClock.php';

$canvas = new Canvas();

$currentTime = strtotime('2021-11-25 01:14');
$digitalClock = new DigitalClock();
$digitalClock->setTime($currentTime);
$canvas->drawClock($digitalClock);

$analogClock = new AnalogClock();
$analogClock->setTime($currentTime);
$canvas->drawClock($analogClock);
?>
    </pre>
</body>
