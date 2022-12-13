<?php
class DBManager{
  //接続のメソッド
  private function dbConnect(){
    $pdo =new PDO('mysql:host=mysql208.phy.lolipop.lan;dbname=LAA1418439-ecsite;charset=utf8','LAA1418439','Pass0627');
    return $pdo;
  }
  public function getProduct_name()
  {
      $pdo = $this->dbConnect();
      $sql = "SELECT product_name FROM product_tbl";
      $ps = $pdo->query($sql);
      $ps->execute();

      $result = $ps->fetchAll();
      return $result;
  }

  public function getProduct_price()
  {
      $pdo = $this->dbConnect();
      $sql = "SELECT product_price FROM product_tbl";
      $ps = $pdo->query($sql);
      $ps->execute();

      $result = $ps->fetchAll();
      return $result;
  }

  public function getProduct_id()
  {
      $pdo = $this->dbConnect();
      $sql = "SELECT product_id FROM product_tbl";
      $ps = $pdo->query($sql);
      $ps->execute();

      $result = $ps->fetchAll();
      return $result;
  }


}

?>