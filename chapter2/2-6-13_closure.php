<?php
declare(strict_types = 1);
$a = 1;

// `use`でクロージャ外の変数を参照する
$add = function (int $b) use ($a): int
{
  return $a + $b; 
};

echo $add(2); // 3
