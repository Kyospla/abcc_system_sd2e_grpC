<!DOCTYPE html>
<html lang="ja">

<head>
  <meta charset="UTF-8">
  <meta http-equiv="X-UA-Compatible" content="IE=edge">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <title>商品詳細</title>
  <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap@5.1.3/dist/css/bootstrap.min.css" integrity="sha384-1BmE4kWBq78iYhFldvKuhfTAU6auU8tT94WrHftjDbrCEXSU1oBoqyl2QvZ6jIW3" crossorigin="anonymous">
  <link href="style.css" rel="stylesheet" type="text/css">
  <meta name="viewport" content="width=device-width, initial-scale=1" />
  <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap-icons@1.8.2/font/bootstrap-icons.css">
</head>

<body>
  <?php
  try {
    $code = $_GET["product_id"];
    $dbn = "mysql:host=mysql208.phy.lolipop.lan;dbname=LAA1418439-ecsite;charset=utf8";
    $user = "LAA1418439";
    $password = "Pass0627";
    $dbh = new PDO($dbn, $user, $password);
    $dbh->setAttribute(PDO::ATTR_ERRMODE, PDO::ERRMODE_EXCEPTION);

    $sql = "SELECT * FROM product_tbl WHERE product_id=?";
    $stmt = $dbh->prepare($sql);
    $data[] = $code;
    $stmt->execute($data);

    $dbh = $null;

    $rec = $stmt->fetch(PDO::FETCH_ASSOC);

    if (empty($rec["product_id"]) === true) {
      $disp_gazou = "";
    } else {
      $disp_gazou = "<img src='../img/" . $rec['product_id'] . ".png'>";
    }
  } catch (Exception $e) {
    print "ただいま障害が発生しております。";
    print "<a href='http://smart-ebino-5557.oops.jp/login.php'>ログイン画面へ</a>";
  }
  ?>

  <body background="img/moroccan-flower.png"></body>
  <nav class="navbar navbar-dark text-white bg-dark">
    <div class="container-fluid">
      <div class="home mr-auto">
        <i class="bi bi-house"></i>
        <i class="bi bi-bag"></i>
      </div>
    </div>
  </nav>

  <div class="row">
    <div class="shohin col-md-7">
    <?php print $disp_gazou; ?>
      <p>商品説明<br>
        <?php print $rec['product_text']; ?></p>
    </div>
    <div class="shohin-detail col-md-5">
      <p>
      <h1><?php print $rec['product_name']; ?></h1><br>
      <div class="price">
        <h2><?php print $rec['product_price']; ?></h2><br>
      </div>
      <form action="cart_insert.php" method="$_POST">
        <div class="container pt20">
          <div class="row">
            <div class="inverse">
              <div class="container">
                <div class="row">
                  <div class="col-xs-12">
                    <div class="form-group">
                      <label class="control-label">サイズ</label>
                      <div class="select-wrap select-inverse">
                        <select name="size" id="size">
                          <option value="free">FREE</option>
                          <option value="s">S</option>
                          <option value="m">M</option>
                          <option value="l">L</option>
                        </select>
                      </div>
                    </div>
                  </div>
                </div>
              </div>
            </div>

            <div class="container pt20">
              <div class="row">
                <div class="inverse">
                  <div class="container">
                    <div class="row">
                      <div class="col-xs-12">
                        <div class="form-group">
                          <label class="control-label">カラー</label>
                          <div class="select-wrap select-inverse">
                            <select name="color" id="color">
                              <option value="Black">ブラック</option>
                              <option value="White">ホワイト</option>
                              <option value="Gray">グレー</option>
                              <option value="Silver">シルバー</option>
                              <option value="Gold">ゴールド</option>
                            </select>
                          </div>
                        </div>
                      </div>
                    </div>
                  </div>
                </div>

                <div class="button_solid001">
                  <a href="cart_insert.php?<?php print $code; ?>">カートに入れる</a><br>
                </div>
                <div class="button_solid001">
                  <a href="tyumonkakutei.php?code=<?php print $code; ?>">今すぐ購入</a><br>
                </div>
      </form>
    </div>
  </div>

  <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.1.3/dist/js/bootstrap.bundle.min.js" integrity="sha384-ka7Sk0Gln4gmtz2MlQnikT1wXgYsOg+OMhuP+IlRH9sENBO0LRn5q+8nbTov4+1p" crossorigin="anonymous"></script>
</body>

</html>