<?php
class DBManager{
  //接続のメソッド
  private function dbConnect(){
    $pdo =new PDO('mysql:host=mysql208.phy.lolipop.lan;dbname=LAA1418439-ecsite;charset=utf8','LAA1418439','Pass0627');
    return $pdo;
  }

  //ログインチェック
  public function loginCheck($user_address,$user_pass){
    $pdo = $this->dbConnect();
    $err_msg="";

    try{
      $sql = 'SELECT count(*) FROM users(user_tbl) WHERE user_address=? AND user_pass=?';
      $stml = $pdo->prepare($sql);
      $stml-> execute(array($user_address,$user_pass));
      $result = $stml ->fetch();
      $stml = null;
      $pdo = null;

      if($result[0]!=0){
        header('Location:http://smart-ebino-5557.oops.jp/welcome.html');
        exit;
      }else{
        $err_msg ="アカウント情報が間違っています。";
      }
    }catch(PDOException $e){
      echo $e->getMessage();
      exit;
    }
  }
}
?>