<?php
  $is_auth = 0;// или 1
  require_once("pages/init.php");
 ?>
<!DOCTYPE html>
<html lang="ru">
    <head>
        <meta http-equiv="Content-Type" content="text/html; charset=utf-8">
        <link rel="stylesheet" type="text/css" href="style.css">
        <title>Banji Tasks</title>
    </head>
    <body>
      <img src="logo.png" class="image" alt="">
      <a href="<?php if($is_auth === 1){
        echo('add.php');
      }
      else{
        echo('register.php');
      }
       ?>" class="button"><?php if($is_auth === 1){
        print("Добавить проект");
      }
      else{
        print("Зарегистрироваться");
      }
      ?></a>
      <a href="<?php if($is_auth === 0){
        echo('register.php'); // Здесь указывается ссылка кнопки "Войти"
      }
       ?>" class="button identity"><?php if($is_auth === 0){
        print("Войти");
      }
      ?></a>

    <?php
     if($is_auth === 1){
      require_once("menu.php");
   }
    else{
      exit;
    }
     ?>
     <form class="search" action="" method="get">
        <input name="s" placeholder="Искать здесь..." type="search">
        <button type="submit">Поиск</button>
     </form>

    <section class="lots">
     <div class="lots__header">
         <h2>Открытые лоты</h2>
     </div>
     <ul class="lots__list">
         <li class="lots__item lot">
             <div class="lot__image">
                 <img src="" width="350" height="260" alt="">
             </div>
             <div class="lot__info">
                 <span class="lot__category">123</span>
                 <h3 class="lot__title"><a class="text-link" href="pages/lot.html">Название проекта</a></h3>
                 <div class="lot__state">
                     <div class="lot__rate">
                         <span class="lot__amount">Название</span>
                         <span class="lot__cost">цена<b class="rub">р</b></span>
                     </div>
                     <div class="lot__timer timer">
                         12:23
                     </div>
                 </div>
             </div>
         </li>
     </ul>
 </section>
    </body>
</html>
