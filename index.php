<?php
  $con = mysqli_connect("localhost", "root", "", "yeticave");
  if ($con == false) {
    print("Ошибка подключения: " . mysqli_connect_error());
  }
  else {
    print("Соединение установлено");
    mysqli_set_charset($con, "utf8");
    $sql_lots = "SELECT categories.name, lots.name, first_price, url, date_delection, bet_step FROM lots JOIN categories ON categories.id = lots.category_id WHERE date_delection > NOW();";
    $result_lots = mysqli_query($con, $sql_lots);
    if (!$result_lots) {
      $error = mysqli_error($con);
      print("Ошибка MySQL: " . $error);
    }
    $products = mysqli_fetch_all($result_lots, MYSQLI_ASSOC);

    $sql_cat = "SELECT name FROM categories;";
    $result_cat = mysqli_query($con, $sql_cat);
    if (!$result_cat) {
      $error = mysqli_error($con);
      print("Ошибка MySQL: " . $error);
    }
    $categories = mysqli_fetch_all($result_cat, MYSQLI_ASSOC);

  }
      require_once("function.php");
      require_once("helpers.php");

$is_auth = rand(0, 1);

$user_name = 'Илья';


$content = include_template('main.php', ['categories' => $categories, 'products' => $products]);

$layout_content = include_template('layout.php', ['content' => $content, 'title' => 'Главная', 'categories' => $categories, 'is_auth' => $is_auth, 'user_name' => 'Илья']);

print($layout_content);

?>
