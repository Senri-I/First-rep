<?php
  //OAuthライブラリの読み込み
  require "twitteroauth/autoload.php";
  use Abraham\TwitterOAuth\TwitterOAuth;

  //認証情報４つ
  $consumerKey = "Yh3J5MCddcGrTL4lNBL8HvcVm";
  $consumerSecret = "UOFGqUXyBrnYtbQGdNt8yAOk7oXSXvJIwPE7Up4aIq6tG67CLO";
  $accessToken = "1436004487-6NGYghBNi5T880TskMUDKGCpjjuj1wPmqniq8Q8";
  $accessTokenSecret = "8uuH43QqU3jwWjg2Vd7JpFfxWx1JfBfBb4TAP4MGbtM1s";

  //接続
  $connection = new TwitterOAuth($consumerKey,$consumerSecret,$accessToken,$accessTokenSecret);

  //ツイート
  // $res = $connection->post("statuses/update",array("status"=>"テストメッセージ9"));
  // var_dump($res);
  // $result = json_decode($res);


  //検索
  // $res = $connection->get("search/tweets", array("q" => "テストコード","count"=>"100"));
  // var_dump($res);
  // echo '<br>';
  // $result = json_decode($res);
  // var_dump($result);

  //friendships
  //$res = $connection->get("followers/list",array("count"=>"100"));
  //var_dump($res);
  //$response = $res->users;

  //フォロワーのリスト表示
  // for($i=0;$i<100;$i++){
  //   $get = $response[$i];
  //   echo $get->name.'<br>';
  // }


  //タイムライン取得
  $res = $connection->get("statuses/home_timeline",array("count"=>"100"));
  // var_dump($res[0]->user->profile_image_url);

  //タイムライン表示
  foreach($res as $status){
    //var_dump($status);
    if($status->retweeted_status){
      echo '<hr>';
      echo "投稿者 : ".$status->user->name."　";
      echo '<small>'."@".$status->user->screen_name.'</small>'.'<br>';
      echo '<p>'.nl2br(($status->retweeted_status->text),false).'</p>';
    }else{
      echo '<hr>';
      echo "投稿者 : ".$status->user->name."　";
      echo '<small>'."@".$status->user->screen_name.'</small>'.'<br>';
      echo '<p>'.nl2br(($status->text),false).'</p>';
    }

  }




 ?>
