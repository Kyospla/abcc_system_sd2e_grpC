<!DOCTYPE html>
<html lang="ja">
    <head>
        <meta charset="UTF-8">
        <meta http-equiv="X-UA-Compatible" content="IE=edge">
        <meta name="vieport" content="width=device-width,initial-scale=1.0" />
        <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap@5.2.2/dist/css/bootstrap.min.css" integrity="sha384-Zenh87qX5JnK2Jl0vWa8Ck2rdkQ2Bzep5IDxbcnCeuOxjzrPF/et3URy9Bv1WTRi" crossorigin="anonymous">
        <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.2.2/dist/js/bootstrap.bundle.min.js" integrity="sha384-OERcA2EqjJCMA+/3y+gxIOqMEjwtxJY7qPCqsdltbNJuaOe923+mo//f6V8Qbsw3" crossorigin="anonymous"></script>
        <style>
          .example{
              width: 300px;
              padding: 10px;
              box-sizing: border-box;
              cursor: pointer;
          }
          .image_size{
            width: 200px;
            height: 220px;
            text-align: left;
          }
          table{
            border-collapse: collapse;
            border: 1px solid black;
            box-shadow: 2px 2px gray;
          }
          td, th { 
            padding: 0.5em 1em;       /* 内側の余白量 */
          }
          .font{
            font-weight: bold;
          }
          
          
          </style>
    </head>
    <body>
        <nav class="navbar navbar-dark bg-dark">
            <div class="container-fluid">
              <a class="navbar-brand" href="#">ナビゲーションバー</a>
              <ul class="navbar-nav ml-auto"> 
                <li class="nav-item"><a href="#" class="nav-link active">ホーム</a></li>
                <li class="nav-item"><a href="#" class="nav-link">カート</a></li>
              </ul>
            </div>
        </nav>
            <div class="container"><br>
                <div class="row">
                  <div class="col-sm-8">
                    <table>
                      <tr>
                        <td colspan="4" rowspan="4">
                          <img src="" class="image_size">
                        </td>
                        <td width="90%">
                          商品名：
                        </td>
                      </tr>
                      <tr>
                        <td width="90%">
                          小計：
                        </td>
                      </tr>
                      <tr>
                        <td width="90%">
                          <?php
                            for ($i=1; $i<=5; $i++){
                              echo '<option value="', $i, '">', $i, '</option>';
                            }
                          ?>
                        </td>
                      </tr>
                      <tr>
                        <td width="50%">
                        サイズ：
                        </td>
                        <td>
                        </td>
                        <td width="30%">
                          色：
                        </td>
                        
                        
                        <td>

                        </td>
                      </tr>
                    </table>
                  
                  </div>
                  <div class="col-sm-4">
                    <table>
                      <tr>
                        <td width="250" height="100">
                          <p class="font">配送方法</p>
                          <select name="haisou">
                            <option value="takuhai">宅配便</option>
                            <option value="mail">メール便</option>
                          </select><br>
                        </td>
                      </tr>
                    </table><br>
                    <table>
                      <tr>
                        <td width="250" height="100">
                          <p class="font">支払方法</p>
                          <select name="shiharai">
                            <option value="credit">クレジットカード</option>
                            <option value="konbini">コンビニ払い</option>
                            <option value="kyaria">キャリア決済</option>
                            <option value="bank">銀豪振込</option>
                            <option value="daikin">代金引換</option>
                          </select>
                        </td>
                      </tr>
                    </table>
                  </div>
                </div><br>
              </div>
              <div class="container"><br>
                <div class="row">
                  <div class="col-sm-4">
                  </div>
                  <div class="col-sm-8">
                    <p class="font">
                                        合計金額: <?php print $total;?> 円</p><br>
                    <button class="example btn btn-lg btn-warning" onclick="location.href='index.html'"><h5> 注文を確定する </h5></button>
                  </div>
                </div>
              </div>
        <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.2.2/dist/js/bootstrap.bundle.min.js" integrity="sha384-OERcA2EqjJCMA+/3y+gxIOqMEjwtxJY7qPCqsdltbNJuaOe923+mo//f6V8Qbsw3" crossorigin="anonymous"></script>
    </body>
</html>
