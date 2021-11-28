<?php
declare(strict_types=1);

require_once __DIR__ . '/Flyable.php';
require_once __DIR__ . '/Walkable.php';

class Bird implements Flyable, Walkable
{
    public function fly(): void
    {
        echo 'Bird is flying..';
    }

    public function walk(): void
    {
        echo 'Bird is walking..';
    }
}
