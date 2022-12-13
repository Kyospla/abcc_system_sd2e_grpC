<!DOCTYPE html>
<html lang="ja">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>カート画面</title>
    
    <style>
.cart{
    height: 600px;
}
#shohin1{
    text-align: right;
    vertical-align: top;
}
.goukei{
    text-align: center;
    
}
    </style>
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap@5.2.2/dist/css/bootstrap.min.css" integrity="sha384-Zenh87qX5JnK2Jl0vWa8Ck2rdkQ2Bzep5IDxbcnCeuOxjzrPF/et3URy9Bv1WTRi" crossorigin="anonymous">
    <link rel="stylesheet" href="css/style.css">
    <meta name="viewport" content="width=device-width, initial-scale=1" />
</head>
<?php
require_once 'DBManager.php';
  $dbmng = new DBManager();
  $quanity;
  $count=0;
  foreach ($dbmng->$productInsert() as $row){
    $cart_id[] = $row['cart_id'];
    $product_id[] = $row['product_id'];
    $size_id[] = $row['size_id'];
  }
              
  if(isset($_GET['product_id'])){
    $prArr = [];
    if(count($_GET['product_id']) != 0){
      $prArr = $_GET['product_id'];
    }
    if(count($prArr) == 0){
                
      $prArr[0] = $quanity;
    }else{
      if(in_array($quanity,$prArr, true)===false){

      }
    }
  }
?>
<body >
    <nav class="navbar navbar-expand navbar-dark bg-dark" aria-label="Second navbar example">

        <div class="container-fluid">

          <a class="navbar-brand" href="#">アクセサリーショップ</a>

          <button class="navbar-toggler" type="button" data-bs-toggle="collapse" data-bs-target="#navbarsExample02" aria-controls="navbarsExample02" aria-expanded="false" aria-label="Toggle navigation">

            <span class="navbar-toggler-icon"></span>

          </button>

    

          <div class="collapse navbar-collapse" id="navbarsExample02">

            <ul class="navbar-nav me-auto">

              <li class="nav-item">

           

              </li>

              <li class="nav-item">

                <a class="nav-link" href="#">タグ</a>

              </li>

            </ul>

            <form>

                <a class="nav-link active" aria-current="page" href="#">Home</a><a class="nav-link active" aria-current="page" href="#">🛒</a>

            </form>
        </div></nav>
      
        <div class="cart" style="padding: 10px; margin-bottom: 50px; border: 10px double #333333;margin-left: 3%;margin-right: 3%;overflow-x: scroll;">
           <div>
            <input type="checkbox">
            <?php
            
            
  
            
            ?>
            
           </div>
        </div>
            <p class="goukei">
              <?php
              for($i = 0; $i < count($product_id);$i++){
                  $price = $product_price[$product_id[$i]];
              }
              
                echo '<p><img src=image/'.$row['product_id']. '.png"></p>';
                echo '<form action="cart-insert.php" method="post">';
                echo '<p>商品名:' .$row['product_name']. '</p>';
                echo '<p>商品詳細'.$row['product_text']. '</p>';
                echo '<p>価格:'.$row['product_price']. '</p>';
                echo '<p>個数:'.$_POST['quanity'].'</p>';
                echo '<p>サイズ:'.$_POST['size'].'</p>';

              echo '<p>合計金額(',$count,'個の商品)(税込)</p>';
              $total = 0;

              for($i=0;$i<$count;$i++) {
              $sub_total = $price[$i]*$name[$i];
              $total += $sub_total;
              ?>
              <?php } ?>
              <?php print $total;?> 円
            </p>
           <div allign="center">
            <button>削除</button>
            <button type="submit">注文</button>
            <form action="./tyumonkakutei.php"></form>
            
            
           </div>

           </body>
          


              
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.2.2/dist/js/bootstrap.min.js" integrity="sha384-IDwe1+LCz02ROU9k972gdyvl+AESN10+x7tBKgc9I5HFtuNz0wWnPclzo6p9vxnk" crossorigin="anonymous"></script>
</body>
</html>

