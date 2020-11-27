<!DOCTYPE html>
<html lang="ru">
<head>
  <?php
    $title = "О нас";
    require "blocks/head.php";
    $about = getAbout (3);
  ?>
</head>
<body>
  <!-- Шапка сайта -->
  <?php require "blocks/header.php" ?>
  <!-- Блок с характеристиками -->
    <!-- Заголовок -->
      <?php
        for ($i = 1; $i < count($about); $i++){
          echo $about[$i]["title"];
        }
      ?>
      <!-- Основа -->
          <!-- 1й блок -->
          <?php
            for ($i = 1; $i < count($about); $i++){
              echo $about[$i]["intro_text"].$about[$i]["full_text"];
            }
          ?>
          <!-- 2й блок -->
          <?php
            for ($i = 1; $i < count($about); $i++){
              echo $about[0]["intro_text"].$about[0]["full_text"];
            }
          ?>
  <!-- Футер сайта -->
  <?php require "blocks/footer.php" ?>
</body>
</html>
