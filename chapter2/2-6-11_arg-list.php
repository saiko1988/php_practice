<?php
declare(strict_types = 1);

function add(int ...$nums): int
{
  $total = 0;
  foreach ($nums as $num) {
    $total += $num;
  }
  return $total;
}

echo add(4,3,2,1);
// echo add('a'); // エラー
