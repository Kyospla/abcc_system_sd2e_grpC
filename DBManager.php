<?php
class DBManager{
  //接続のメソッド
  private function dbConnect(){
    $pdo =new PDO('mysql:host=mysql208.phy.lolipop.lan;dbname=LAA1418439-ecsite;charset=utf8','LAA1418439','Pass0627');
    return $pdo;
  }
}
?>