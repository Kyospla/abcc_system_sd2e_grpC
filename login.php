<!DOCTYPE html>
<html lang="ja">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>ログイン画面</title>
    <style>
        #tytle {
            color: royalblue;
            text-align: center;
            margin-top: 100px;
        }

        #useraddress,#userpass {
            margin-top: 50px;
            margin: 20px auto;
            width: 50%;
        }

        #signin {
            margin: auto;
            width: 30%;
            min-width: 200px;
            max-width: 600px;
            padding: 10px;
            box-sizing: border-box;
            cursor: pointer;
        }
    </style>
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap@5.1.3/dist/css/bootstrap.min.css"
        integrity="sha384-1BmE4kWBq78iYhFldvKuhfTAU6auU8tT94WrHftjDbrCEXSU1oBoqyl2QvZ6jIW3" crossorigin="anonymous">
</head>

<body>
    <h1 id="tytle">小物系ECサイト</h1>
    <div class="row">
        <form action="./logincheck.php" method="post">
            <div class="col-12 md-1">
                <div class="form-floating">
                    <input type="text" class="form-control" id="useraddress" name="useraddress" placeholder="メールアドレスを入力">
                    <label for="useraddress">メールアドレス</label>
                </div>
            </div>
            <div class="col-12 md-2">
                <div class="form-floating">
                    <input type="password"  class="form-control" id="userpass" name="userpass">
                    <label for="userpass">パスワード</label>
                </div>
            </div>
            <button name="signin" type="btn" id="btn" class="btn btn-dark" type="submit">ログイン</button>
        </form>
    </div>
    <script src="https://code.jquery.com/jquery-3.3.1.slim.min.js"
        integrity="sha384-q8i/X+965DzO0rT7abK41JStQIAqVgRVzpbzo5smXKp4YfRvH+8abtTE1Pi6jizo"
        crossorigin="anonymous"></script>
    <script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.14.3/umd/popper.min.js"
        integrity="sha384-ZMP7rVo3mIykV+2+9J3UJ46jBk0WLaUAdn689aCwoqbBJiSnjAK/l8WvCWPIPm49"
        crossorigin="anonymous"></script>
    <script src="https://stackpath.bootstrapcdn.com/bootstrap/4.1.3/js/bootstrap.min.js"
        integrity="sha384-ChfqqxuZUCnJSK3+MXmPNIyE6ZbWh2IMqE241rYiqJxyMiZ6OW/JmZQ5stwEULTy"
        crossorigin="anonymous"></script>
</body>

</html>