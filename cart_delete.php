<?php require_once 'DBManager.php';?>
<?php 
session_start();
unset($_REQUEST['produce'][$_REQUEST['id']]);
echo 'カートから商品を削除しました。';
echo '<hr>';
require 'cart.php';
?>