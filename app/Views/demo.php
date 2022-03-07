<!doctype html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport"
          content="width=device-width, user-scalable=no, initial-scale=1.0, maximum-scale=1.0, minimum-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title><?= $title ?></title>
    <style>
        body {
            margin-top: 20%;
            text-align: center;
        }
    </style>
</head>
<body>
<h1>
    You have been referred from <a href="<?= $_SERVER['HTTP_REFERER'] ?>"><?= $_SERVER['HTTP_REFERER'] ?></a>
</h1>
</body>
</html>