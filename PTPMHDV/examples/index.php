<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <link rel="apple-touch-icon" sizes="76x76" href="../assets/img/apple-icon.png">
    <link rel="icon" type="image/png" href="../assets/img/favicon.ico">
    <meta http-equiv="X-UA-Compatible" content="IE=edge,chrome=1" />
    <title>Đăng nhập</title>
    <meta content='width=device-width, initial-scale=1.0, maximum-scale=1.0, user-scalable=0, shrink-to-fit=no' name='viewport' />

    <link href="../assets/css/demo.css" rel="stylesheet" />
    <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/css/bootstrap.min.css">
    <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.3.1/jquery.min.js"></script>
    <script src="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/js/bootstrap.min.js"></script>

    <style type="text/css">
        .container div{
            width:300px;
            margin: 0 auto;
        }
    </style>
</head>
<body>
<div class="container">
        <h2 align="center">Đăng nhập</h2>
        <form name="login" action="./benhnhan.php" method="post" class="form-group">
            <div class="form-group">
                <label>Tài khoản:</label>
                <input type="text" name="account" class="form-control" placeholder="Tên đăng nhập">
            </div>
            <div class="form-group">
                <label>Mật khẩu:</label>
                <input type="password" name="pass" class="form-control" placeholder="Mật khẩu">
            </div>
            <div class="form-group">
                <input type="checkbox">Ghi nhớ
            </div>
            <div class="login-submit">
                <button type="submit" class="btn btn-primary">Đăng nhập</button>
                <button type="submit" class="btn btn-primary">Quên mật khẩu?</button>
            </div>
        </form>
</div>
</body>
</html>