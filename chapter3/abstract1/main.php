<?php declare(strict_types=1) ?>
<body>
    <pre>
<?php
require_once __DIR__ . '/DigitalClock.php';
$currentTime = strtotime('2021-11-25 01:14');
$digitalClock = new DigitalClock();
$digitalClock->setTime($currentTime);
echo $digitalClock->show();
?>
    </pre>
</body>
