<?php
//test
  function random_int_by_seed($seed,array $table,$daily=false){
    $seed = (string)filter_var($seed);

    if(daily){
      $seed .= (new DateTime('today Asia/Tokyo'))->format('Y/m/d');
    }
    mt_srand(crc32($seed));
    $r = [];
    foreach($table as $i=>$row){
      $row = (array)$row;
      $r[$i] = $row ? $row[mt_rand(0,count($row) - 1)] : null ;
    }
    mt_srand();
    return $r;
  }

  // $name = "猪狩 泉里";
  // $r = random_int_by_seed($name,[['大吉', '吉', '中吉', '小吉', '末吉', '凶', '大凶'],['赤', '青', '緑', 'ピンク']],true);
  // vprintf("{$name}さんの今日の運勢は%sです！ラッキーカラーは%sです！\n",$r);

 ?>

<!DOCTYPE html>
<html lang="ja">
  <head>
    <meta charset="utf-8">
  </head>>
  <body>
  </body>
</html>
