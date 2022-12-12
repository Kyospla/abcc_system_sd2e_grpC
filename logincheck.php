<?php
//「DBManager.php」ファイルを読み込む
require_once './DBManager.php';
//DBManagerをnewする
$dbm = new DBManager();
$userList=$dbm->getUserTblByIdAndPass($_POST['useraddress'],$_POST['userpass']);
$getCnt=count($userList);
if($getCnt>=1){
  header('Location: http://smart-ebino-5557.oops.jp/shohin_itiran/Shohin_itiran.php');
  exit;
}else{
  header('Location: http://smart-ebino-5557.oops.jp/login.php');
  exit;
  echo "http://smart-ebino-5557.oops.jp/login.php";
}
?>

