<?php
$array1 = ['A', 'B', 'C', 'D', 'E'];
$array2 = ['F', 'G', 'A', 'B', 'C'];

$array3 = [
  'id01' => 'a',
  'id02' => 'b',
  'id03' => 'c',
  'id04' => 'd',
  'id05' => 'e',
];
$array4 = [
  'id06' => 'f',
  'id07' => 'g',
  'id02' => 'a',
  'id09' => 'b',
  'id10' => 'c',
];
?>
<?php
// +演算子の場合、重複した場合は「前」が優先される
?>
<pre><?php var_dump($array1 + $array2);?></pre>
<pre><?php var_dump($array3 + $array4);?></pre>
<?php
// array_mergeの場合、重複は極力排除せず後ろに連結する
?>
<pre><?php var_dump(array_merge($array1, $array2));?></pre>
<pre><?php var_dump(array_merge($array3, $array4) );?></pre>

