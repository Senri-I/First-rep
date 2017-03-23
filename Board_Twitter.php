<?php
  try{
    $pdo = new PDO('mysql:dbname=Board_Twitter;host=localhost','root','root');
  }catch(PDOExecption $e){
    exit("接続に失敗しました。".$e->getMessage());
  }

  //削除コード
  //$obj = $pdo->query("DELETE FROM board WHERE id >= 1");
?>
