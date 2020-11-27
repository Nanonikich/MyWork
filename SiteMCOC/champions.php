<!DOCTYPE html>
<html lang="ru">
<head>
  <?php
    $title = "Чемпионы";
    require "blocks/head.php";
    $champions = getChampions (3);
  ?>
</head>
<body>
  <!-- Шапка сайта -->
  <?php require "blocks/header.php" ?>
  <!-- Основа -->
      <!-- Заголовок -->
      <?php
        for ($i = 2; $i < count($champions); $i++){
          echo $champions[$i]["title"];
        }
      ?>
      <!-- Основа -->
        <!-- 1й блок -->
          <?php
            for ($i = 2; $i < count($champions); $i++){
              echo $champions[$i]["intro_text"].$champions[$i]["full_text"];
            }
          ?>
        <!-- 2й блок -->
        <?php
          for ($i = 2; $i < count($champions); $i++){
            echo $champions[1]["intro_text"].$champions[1]["full_text"];
          }
        ?>
        <!-- 3й блок -->
        <?php
          for ($i = 2; $i < count($champions); $i++){
            echo $champions[0]["intro_text"].$champions[0]["full_text"];
          }
        ?>
  <!-- Футер сайта -->
  <?php require "blocks/footer.php" ?>
</body>
</html>