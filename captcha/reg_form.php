<!doctype html>
<html lang="ru">
<head>
    <meta charset="UTF-8">
    <meta name="viewport"
          content="width=device-width, user-scalable=no, initial-scale=1.0, maximum-scale=1.0, minimum-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <link rel="stylesheet" href="bootstrap-5.3.2-dist/css/bootstrap.css">
    <script src="bootstrap-5.3.2-dist/js/bootstrap.js"></script>
    <script src="bootstrap-5.3.2-dist/js/bootstrap.bundle.js"></script>
    <link rel="stylesheet" href="main.css">
    <title>Document</title>
</head>
<body>
<div class="content">
    <h1>Зарегистрироваться</h1>
    <form action="registration.php" method="post">
        <div class="mb-3">
            <label for="login" class="form-label">Введите логин</label>
            <input type="text" class="form-control" id="login" name="login" >
        </div>
        <div class="mb-3">
            <label for="password" class="form-label">Введите пароль</label>
            <input type="password" class="form-control" id="password" name="password">
        </div>
        <button type="submit" class="btn btn-primary">Зарегистрироваться</button>
    </form>
</div>
</body>
</html>
