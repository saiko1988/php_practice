<?php
declare(strict_types=1);

require_once __DIR__ . '/Flyable.php';

class Sky
{
    public function draw(Flyable $flyable)
    {
        $flyable->fly();
    }
}
