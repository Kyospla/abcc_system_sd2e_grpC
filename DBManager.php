<?php
class DBManager
{
  //接続のメソッド
  private function dbConnect()
  {
    $pdo = new PDO('mysql:host=mysql208.phy.lolipop.lan;dbname=LAA1418439-ecsite;charset=utf8', 'LAA1418439', 'Pass0627');
    return $pdo;
  }

  //ログインチェック
  public function getUserTblByIdAndPass($user_address, $user_pass)
  {
    $pdo = $this->dbConnect();
    $sql = "SELECT * FROM user_tbl WHERE user_address=? AND user_pass=?";
    $ps = $pdo->prepare($sql);
    $ps->bindValue(1, $user_address, PDO::PARAM_STR);
    $ps->bindValue(2, $user_pass, PDO::PARAM_STR);
    $ps->execute();
    $searchArray = $ps->fetchAll();
    return $searchArray;
  }

  //カートに商品データ挿入
  public function productInsert($cart_id, $product_id, $size_id, $quanity)
  {
    $pdo = $this->dbConnect();
    $sql = "INSERT INTO detail_tbl(cart_id,product_id,size_id,quanity) VALUES(?,?,?,?)";
    $ps = $pdo->prepare($sql);
    $ps->bindValue(1, $cart_id, PDO::PARAM_STR);
    $ps->bindValue(2, $product_id, PDO::PARAM_STR);
    $ps->bindValue(3, $size_id, PDO::PARAM_STR);
    $ps->bindValue(4, $quanity, PDO::PARAM_STR);
    $ps->execute();
  }

  //ユーザーidからカートidを探す
  public function cartSearch($user_id)
  {
    $pdo = $this->dbConnect();
    $sql = "SELECT cart_id FROM cart_tbl WHERE user_id = ? AND torokubi = '0000-00-00'";
    $ps = $pdo->prepare($sql);
    $ps->bindValue(1, $user_id, PDO::PARAM_STR);
    $ps->execute();
    $result = $ps->fetchAll();
    return $result;
  }
  //カートIDを挿入
  public function cartIdInsert($user_id, $cart_id)
  {
    $pdo = $this->dbConnect();
    $sql = "INSERT INTO cart_tbl (cart_id, user_id, buy_date) VALUES (?,?,'0000-00-00')";
    $ps = $pdo->prepare($sql);
    $ps->bindValue(1, $cart_id, PDO::PARAM_STR);
    $ps->bindValue(2, $user_id, PDO::PARAM_STR);
    $ps->execute();
  }
  //カートIDから中身取得
  public function getCart($cart_id)
  {
    $pdo = $this->dbConnect();
    $sql = "SELECT device_id FROM cart_details WHERE cart_id = ?";
    $ps = $pdo->prepare($sql);
    $ps->bindValue(1, $cart_id, PDO::PARAM_STR);
    $ps->execute();
    $result = $ps->fetchAll();
    return $result;
  }
  //商品名を取得
  public function getProduct_name()
  {
    $pdo = $this->dbConnect();
    $sql = "SELECT product_name FROM product_tbl";
    $ps = $pdo->query($sql);
    $ps->execute();

    $result = $ps->fetchAll();
    return $result;
  }
  //商品価格を取得
  public function getProduct_price()
  {
    $pdo = $this->dbConnect();
    $sql = "SELECT product_price FROM product_tbl";
    $ps = $pdo->query($sql);
    $ps->execute();

    $result = $ps->fetchAll();
    return $result;
  }
  //商品IDを取得
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
