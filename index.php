<?php
  $con = mysqli_connect("localhost", "root", "", "yeticave");
  if ($con == false) {
    exit;
  }
    mysqli_set_charset($con, "utf8");
    $sql_cat = "SELECT name, id, img FROM categories;";
    $result_cat = mysqli_query($con, $sql_cat);
    if (!$result_cat) {
      exit;
    }
    $categories = mysqli_fetch_all($result_cat, MYSQLI_ASSOC);
    $sql_lots = "SELECT  categories.name AS category_name, lots.name, lots.id AS lot_url, first_price, url, date_delection, bet_step FROM lots JOIN categories ON categories.id = lots.category_id WHERE date_delection > NOW() ORDER BY date_delection DESC;";
    $result_lots = mysqli_query($con, $sql_lots);
    if (!$result_lots) {
      exit;
    }
    $products = mysqli_fetch_all($result_lots, MYSQLI_ASSOC);

      require_once("function.php");
      require_once("helpers.php");

$is_auth = rand(0, 1);

$user_name = 'Илья';


$content = include_template('main.php', ['categories' => $categories, 'products' => $products]);

$layout_content = include_template('layout.php', ['content' => $content, 'title' => 'Главная', 'categories' => $categories, 'is_auth' => $is_auth, 'user_name' => 'Илья']);

print($layout_content);

?>
