<?php
declare(strict_types=1); // 暗黙の型変換を防ぎ、厳密な型チェックを行う。必ず冒頭に書く。

function add(int $a, int $b): int {
  return $a + $b;
}
$var = add(3,4);
echo $var . PHP_EOL;

// $var2 = add(true, 3); // 厳密な型チェックを行っていない場合、trueは1に変換される。
// echo $var2;

function echoArg(string $str): void{
  echo $str;
}
echoArg('Hello World');