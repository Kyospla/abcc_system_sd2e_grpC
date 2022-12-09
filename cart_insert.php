<?php require_once 'DBManager.php';?>
<?php

$id=$_REQUEST['id'];
if (!isset($_REQUEST['product'])){
  $_REQUEST['product']=[];
}
$count=0;
if (isset($_REQUEST['product'][$id])) {
  $count=$_REQUEST['product'][$id]['count'];
}
$_REQUEST['product'][$id]=[
  'name'=>$_REQUEST['name'],
  'price'=>$_REQUEST['price'],
  'count'=>$count+$_REQUEST['count']
];
echo '<p>カートに商品を追加しました</p>';
echo '<hr>';
require 'cart.php';
?>