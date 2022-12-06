<?php
//「DBManager.php」ファイルを読み込む
require_once 'DBManager.php';
//DBManagerをnewする
$dbm = new DBManager();
$userList=$dbm->getUserTblByIdAndPass($_POST['useraddress'],$_POST['userpass']);
// $userList=$dbm->getUserTblByIdAndPass(1,"pass1");
$getCnt=count($userList);
if($getCnt>=1){
  echo '<a href="http://long-usa-8493.mond.jp/test/product_list.html">';
  header('Location: http://long-usa-8493.mond.jp/test/shoping.php');
  exit;
}else{
  header('Location: http://long-usa-8493.mond.jp/test/login_complete.html');
  exit;
  echo "http://long-usa-8493.mond.jp/test/login_2.html";
}
?>

