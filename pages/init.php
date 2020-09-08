<?php
    $con = mysqli_connect("localhost", "root", "", "Banji");
      if ($con == false) {
        print("Ошибка подключения!");
      }
      mysqli_set_charset($con, "utf8");
      $sql_projects = "SELECT projects.name, projects.id, image, description, author, date_creation, categories.id FROM projects JOIN categories ON categories.id = projects.category_id ORDER BY date_creation DESC;";
      $result_pro = mysqli_query($con, $sql_projects);
      if (!$result_pro) {
        print("Ошибка формирования массива!");
      }
      $projects = mysqli_fetch_all($result_pro, MYSQLI_ASSOC);

      $sql_categories = "SELECT name, id FROM categories;";
      $result_cat = mysqli_query($con, $sql_categories);
      if (!$result_cat) {
        exit;
      }
      $categories = mysqli_fetch_all($result_cat, MYSQLI_ASSOC);
?>
