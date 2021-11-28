<?php
declare(strict_types=1);

require __DIR__ . '/Clock.php';

class Canvas
{
    public $backgroundColor;

    public function drawClock(Clock $clock): void
    {
        echo $clock->show(), PHP_EOL;
    }
}
