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

// 以下の`add2()`はエラー
// function add2(int ...$nums, string $str): string // Only the last parameter can be variadic
// {
  // $total = 0;
  // foreach ($nums as $num) {
    // $total += $num;
  // }
  // return "{$str}: {$total}";
// }

// 関数呼び出し側で可変長引数を使うことができる
$nums = [1,3,5,7]; // 配列が各要素の数値に展開される
echo add(...$nums); // 16 