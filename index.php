<?php
error_reporting(-1);
ini_set('display_errors','On');
header("Content-Type: text/html; charset=utf-8");

if(isset($_POST['login'],$_POST['password'])) {
    if($_POST['login'] === 'admin' && $_POST['password'] === '123') {
        header("we");
        exit;
    } else {
        $error = 'Вы неправильно ввели логин или пароль';
    }
}
?>

<!doctype html>
<html>
<head>
<link href="style.css" rel="stylesheet" type="text/css">
<meta http-equiv="Content-Type" content="text/html; charset=utf-8">
<title>Y-Engine</title>
</head>
<body>

<?php
error_reporting(-1);
ini_set('display_errors','On');
header("Content-Type: text/html; charset=utf-8");

if(isset($_POST['login'],$_POST['password'])) {
    if($_POST['login'] === 'admin' && $_POST['password'] === '123') {
        header("we");
        exit;
    } else {
        $error = 'Вы неправильно ввели логин или пароль';
    }
}
?>
<?php if(isset($error)) { ?>
    <div>Здравствуйте, <?=htmlspecialchars($error);?></div>
<?php } ?>
<form action="main.php" method="post">
    <input type="text" name="login" placeholder="Введите логин">
    <input type="password" name="password" placeholder="введите пароль">
    <input type="submit" value="Войти на сайт!">
</form>
</body>
</html>
<?php
    echo 'test1';
 ?>
