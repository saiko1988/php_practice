<?php
$greeting1 = 'Hello';
$greeting2 = &$greeting1; // &: 参照渡し
$greeting1 = 'World';
?>
<pre><?= $greeting1; ?></pre>
<pre><?= $greeting2; ?></pre>