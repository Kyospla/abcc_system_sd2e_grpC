<!DOCTYPE html>
<html lang="en">

<head>
  <meta charset="UTF-8">
  <meta http-equiv="X-UA-Compatible" content="IE=edge">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <link rel="stylesheet" href="./Shohin_itiran.css">
  <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap@5.2.2/dist/css/bootstrap.min.css"
    integrity="sha384-Zenh87qX5JnK2Jl0vWa8Ck2rdkQ2Bzep5IDxbcnCeuOxjzrPF/et3URy9Bv1WTRi" crossorigin="anonymous">
  <link href="https://stackpath.bootstrapcdn.com/font-awesome/4.7.0/css/font-awesome.min.css" rel="stylesheet">
  <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.2.2/dist/js/bootstrap.bundle.min.js"
    integrity="sha384-OERcA2EqjJCMA+/3y+gxIOqMEjwtxJY7qPCqsdltbNJuaOe923+mo//f6V8Qbsw3"
    crossorigin="anonymous"></script>
  <meta name="viewport" content="width=device-width, initial-scale=1" />
  <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap-icons@1.5.0/font/bootstrap-icons.css">
  <title>cheap</title>
</head>

<body>
  <!--ナビゲーションバー-->
  <nav class="navbar navbar-dark bg-dark">
    <div class="container-fluid">
      <a class="navbar-brand" href="#">ナビゲーションバー</a>
      //修正必須↓
      <ul class="navbar-nav ml-auto">
        <li class="nav-item"><a href="#" class="nav-link active">ホーム</a></li>
        <li class="nav-item"><a href="#" class="nav-link">カート</a></li>
      </ul>
    </div>
  </nav>
  <!--グリッド定義-->
  <div class="container">
    <!--カテゴリー一覧-->
    <div id="list" class="sidebar">
      <form method="get" action="#" class="search_container">
        <input type="text"><input type="submit" value="&#xf002">
      </form>
      <dd class="category">
        <dl class=" ">
          <dt class="category-parent btn-side-nav btn-side-sub">
            <span id="category2" class="side-nav-category">
              <strong>ネックレス</strong>
            </span>
          </dt>
        </dl>
        <dl class=" ">
          <dt class="category-parent btn-side-nav btn-side-sub">
            <span id="category3" class="side-nav-category">
              <strong>ピアス</strong>
            </span>
          </dt>
        </dl>
        <dl class=" ">
          <dt class="category-parent btn-side-nav btn-side-sub">
            <span id="category4" class="side-nav-category">
              <strong>リング</strong>
            </span>
          </dt>
        </dl>
        <dl class=" ">
          <dt class="category-parent btn-side-nav btn-side-sub">
            <span id="category5" class="side-nav-category">
              <strong>ブレスレッド</strong>
            </span>
          </dt>
        </dl>
      </dd>
    </div>
    <!--商品一覧-->
    <div id="kobetu1" class="col-md-3">
      <a href="	http://smart-ebino-5557.oops.jp/shohin_shosai/syosai.php"> 
      <p>商品名</p>
      <img src="../img/10001.png" alt="商品画像" width="250px" height="200px">
      <p>商品価格</p>
      </a>
    </div>
    <div id="kobetu2" class="col-md-3">
      <p>商品名</p>
      <img src="../img/10002.png" alt="商品画像" width="250px" height="200px">
      <p>商品価格</p>
    </div>
    <div id="kobetu3" class="col-md-3">
      <p>商品名</p>
      <img src="../img/10003.png" alt="商品画像" width="250px" height="200px">
      <p>商品価格</p>
    </div>
    <div id="kobetu4" class="col-md-3">
      <p>商品名</p>
      <img src="../img/10004.png"  alt="商品画像" width="250px" height="200px">
      <p>商品価格</p>
    </div>
    <div id="kobetu5" class="col-md-3">
      <p>商品名</p>
      <img src="../img/10005.png" alt="商品画像" width="250px" height="200px">
      <p>商品価格</p>
    </div>
    <div id="kobetu6" class="col-md-3">
      <p>商品名</p>
      <img src="../img/10006.png" alt="商品画像" width="250px" height="200px">
      <p>商品価格</p>
    </div>
    <div id="kobetu7" class="col-md-3">
      <p>商品名</p>
      <img src="../img/20001.png" alt="商品画像" width="250px" height="200px">
      <p>商品価格</p>
    </div>
    <div id="kobetu8" class="col-md-3">
      <p>商品名</p>
      <img src="../img/20002.png" alt="商品画像" width="250px" height="200px">
      <p>商品価格</p>
    </div>
    <div id="kobetu9" class="col-md-3">
      <p>商品名</p>
      <img src="../img/20003.png" alt="商品画像" width="250px" height="200px">
      <p>商品価格</p>
    </div>
    <div id="kobetu10" class="col-md-3">
      <p>商品名</p>
      <img src="../img/20004.png" alt="商品画像" width="250px" height="200px">
      <p>商品価格</p>
    </div>
    <div id="kobetu11" class="col-md-3">
      <p>商品名</p>
      <img src="../img/20005.png" alt="商品画像" width="250px" height="200px">
      <p>商品価格</p>
    </div>
    <div id="kobetu12" class="col-md-3">
      <p>商品名</p>
      <img src="../img/20006.png" alt="商品画像" width="250px" height="200px">
      <p>商品価格</p>
    </div>
    <div id="kobetu13" class="col-md-3">
      <p>商品名</p>
      <img src="../img/30001.png" alt="商品画像" width="250px" height="200px">
      <p>商品価格</p>
    </div>
    <div id="kobetu14" class="col-md-3">
      <p>商品名</p>
      <img src="../img/30002.png" alt="商品画像" width="250px" height="200px">
      <p>商品価格</p>
    </div>
    <div id="kobetu15" class="col-md-3">
      <p>商品名</p>
      <img src="../img/30003.png" alt="商品画像" width="250px" height="200px">
      <p>商品価格</p>
    </div>
    <div id="kobetu16" class="col-md-3">
      <p>商品名</p>
      <img src="../img/30004.png" alt="商品画像" width="250px" height="200px">
      <p>商品価格</p>
    </div>
    <div id="kobetu17" class="col-md-3">
      <p>商品名</p>
      <img src="../img/30005.png" alt="商品画像" width="250px" height="200px">
      <p>商品価格</p>
    </div>
    <div id="kobetu18" class="col-md-3">
      <p>商品名</p>
      <img src="../img/30006.png" alt="商品画像" width="250px" height="200px">
      <p>商品価格</p>
    </div>
    <div id="kobetu19" class="col-md-3">
      <p>商品名</p>
      <img src="../img/40001.png" alt="商品画像" width="250px" height="200px">
      <p>商品価格</p>
    </div>
    <div id="kobetu20" class="col-md-3">
      <p>商品名</p>
      <img src="../img/40002.png" alt="商品画像" width="250px" height="200px">
      <p>商品価格</p>
    </div>
    <div id="kobetu21" class="col-md-3">
      <p>商品名</p>
      <img src="../img/40003.png" alt="商品画像" width="250px" height="200px">
  
      <p>商品価格</p>
    </div>
    <div id="kobetu22" class="col-md-3">
      <p>商品名</p>
      <img src="../img/40004.png" alt="商品画像" width="250px" height="200px">
      <p>商品価格</p>
    </div>
    <div id="kobetu23" class="col-md-3">
      <p>商品名</p>
      <img src="../img/40005.png" alt="商品画像" width="250px" height="200px">
      <p>商品価格</p>
    </div>
    <div id="kobetu24" class="col-md-3">
      <p>商品名</p>
      <img src="../img/40006.png" alt="商品画像" width="250px" height="200px">

      <p>商品価格</p>
    </div>

  </div>
  <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.2.2/dist/js/bootstrap.bundle.min.js"
    integrity="sha384-OERcA2EqjJCMA+/3y+gxIOqMEjwtxJY7qPCqsdltbNJuaOe923+mo//f6V8Qbsw3"
    crossorigin="anonymous"></script>
</body>

</html>