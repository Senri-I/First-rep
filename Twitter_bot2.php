<?php
  // twitteroauth.phpを読み込む
  require "twitteroauth/autoload.php";
  use Abraham\TwitterOAuth\TwitterOAuth;

  // Consumer keyの値
  $consumerKey = "Yh3J5MCddcGrTL4lNBL8HvcVm";
  $consumerSecret = "UOFGqUXyBrnYtbQGdNt8yAOk7oXSXvJIwPE7Up4aIq6tG67CLO";
  $accessToken = "1436004487-6NGYghBNi5T880TskMUDKGCpjjuj1wPmqniq8Q8";
  $accessTokenSecret = "8uuH43QqU3jwWjg2Vd7JpFfxWx1JfBfBb4TAP4MGbtM1s";



  // OAuthオブジェクト生成
  $to = new TwitterOAuth($consumerKey,$consumerSecret,$accessToken,$accessTokenSecret);


  // home_timelineの取得。TwitterからXML形式が返ってくる
  $req = $to->get("https://api.twitter.com/1.1/statuses/home_timeline.json",array("count"=>"10"));
  var_dump($req);
  // Twitterから返されたJSONをデコードする
  $result = json_decode($req);
  echo $result[0];


  // whileで呟きの分だけループする
  // echo "こんちわ";
  // while($status = $result->status){
  //   echo "こんちわ";
  //   $status_id = $status->id_str; // 呟きのステータスID
  //   $text = $status->text; // 呟き
  //   $user_id = $status->user->id_str; // ID（数字）
  //   $screen_name = $status->user->screen_name; // ユーザーID（いわゆる普通のTwitterのID）
  //   var_dump($screen_name)."<br>";
  //   $name = $status->user->name; // ユーザーの名前（HNなど）
  //   echo "<p><b>".$screen_name." / ".$name."</b> <a href=\"https://twitter.com/".$screen_name."/status/".$status_id."\">この呟きのパーマリンク</a><br />\n".$text."</p>\n";
  // }

  //foreachで呟きの分だけループする

  // foreach($result->status as $status){
  //   echo "こんちわ";
  //   $status_id = $status->id_str; // 呟きのステータスID
  //   $text = $status->text; // 呟き
  //   $user_id = $status->user->id_str; // ID（数字）
  //   $screen_name = $status->user->screen_name; // ユーザーID（いわゆる普通のTwitterのID）
  //   var_dump($screen_name)."<br>";
  //   $name = $status->user->name; // ユーザーの名前（HNなど）
  //   echo "<p><b>".$screen_name." / ".$name."</b> <a href=\"https://twitter.com/".$screen_name."/status/".$status_id."\">この呟きのパーマリンク</a><br />\n".$text."</p>\n";
  // }



?>
