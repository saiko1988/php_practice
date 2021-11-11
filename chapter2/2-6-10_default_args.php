<?php
declare(strict_types = 1);

function greet(string $greeting = 'Hello.'): string
{
  return $greeting;
}

echo greet() . PHP_EOL; // Hello.
echo greet('Good Afternoon.') . PHP_EOL;

// デフォルト引数を右側に置くのは非推奨(PHP8.0-)
function greet2(string $greeting = 'Hello', string $greeting2): string
{
  return "{$greeting} {$greeting2}";
}

// 2つ引数がないと関数を呼び出せないので、デフォルト引数の意味がない 
echo greet2('Good Afternoon', 'World'); // Deprecated: Required parameter $greeting2 follows optional parameter $greeting in

// 変数をデフォルト値にすることはできない
$default = 'World';
function greet3(string $greeting, string $greeting2 = $default): string
{
  return "{$greeting} {$greeting2}";
}
echo greet3('Hello'); // Fatal error: Constant expression contains invalid operations in

// 定数は設定できる
define('GREETING2', 'World');
function greet4(string $greeting, string $greeting2 = GREETING2): string
{
  return  "{$greeting} {$greeting2}";
}
echo greet4('Hello') . PHP_EOL;
