<?php
/**
 * exit, dieともにプログラムを強制終了させる命令
 * exit: 終了コードを返さないか、ステータスコードを返す（成功時は0,エラー発生時は1か、0以外）場合に使うことが多い。
 * die: エラーメッセージを出力させる場合に使うことが多い。
 */
$score = -100;
// if($score < 0){
//   echo 'スコアは正の数でなければなりません。';
//   exit(1); // エラー発生
// }
// echo "スコアは{$score}点です。"; // 出力されない

if($score < 0){
  die('スコアは正の数でなければなりません。');
}
echo "スコアは{$score}点です。"; // 出力されない


