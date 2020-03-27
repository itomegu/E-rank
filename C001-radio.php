<form name="radioB">
<?php  
$city = ["オタワ","トロント","モントリオール","ジュネーブ","チューリッヒ","ベルン","ハンブルク","ブレーメン","ベルリン","バルセロナ","マドリード","リスボン","シドニー","メルボルン","キャンベラ"];
$country = ["カナダ","スイス","ドイツ","スペイン","オーストラリア"];
$c = 0;
foreach ($city as $key => $value){
  if($key % 3 == 0)
    echo $country[$c++] ,"の首都は?<br>";
    echo "<input type ='radio' name='Q$c' value='$key'> $value<br>";
}
?>
<input type="submit" name="submit" value="php採点">
<!-- phpでやるのでsubmit(送信) -->
<?php
if( isset($_GET['submit'])){
  // 採点ボタンを押していたら
  $seikai = 0;
  $trueAns = [0,5,8,10,14];
  for ( $i=0; $i<5; $i++){
    $q = $i+1;
    if( isset($_GET["Q$q"]) && $_GET["Q$q"] == $trueAns[$i])
    $seikai++;
  }  
  echo "あなたは",$seikai*20,"点でした!";
}
?>