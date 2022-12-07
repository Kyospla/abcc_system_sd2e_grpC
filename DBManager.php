<?php
class DBManager{
  //接続のメソッド
  private function dbConnect(){
    $pdo =new PDO('mysql:host=mysql208.phy.lolipop.lan;dbname=LAA1418439-ecsite;charset=utf8','LAA1418439','Pass0627');
    return $pdo;
  }

  //ログインチェック
  public function getUserTblByIdAndPass($user_address,$user_pass){
    $pdo=$this->dbConnect();
    $sql="SELECT * FROM user_tbl WHERE user_address=? AND user_pass=?";
    $ps=$pdo->prepare($sql);
    $ps->bindValue(1,$user_address,PDO::PARAM_STR);
    $ps->bindValue(2,$user_pass,PDO::PARAM_STR);
    $ps->execute();
    $searchArray=$ps->fetchAll();
    return $searchArray;
}
}
?>