<!DOCTYPE html>
<html lang="ru">
<head>
  <?php
    $title = "Главная";
    require_once "blocks/head.php";
    $news = getNews (5);
  ?>
</head>
<body>
  <!-- Шапка сайта -->
  <?php require "blocks/header.php" ?>
  <!-- Слайдер -->
  <?php
    for ($i = 2; $i < count($news); $i++){
      echo $news[1]["intro_text"];
    }
  ?>
  <!-- Основной блок сайта -->
  <?php
    for ($i = 2; $i < count($news); $i++){
      echo $news[$i]["intro_text"].$news[2]["full_text"];
    }
  ?>
  <!-- Блок с характеристиками -->
  <?php
    for ($i = 2; $i < count($news); $i++){
      echo $news[1]["title"].$news[1]["full_text"];
    }
  ?>
  <!-- Раздел с карточками -->
  <?php
    for ($i = 2; $i < count($news); $i++){
      echo $news[0]["title"].$news[0]["intro_text"];
    }
  ?>
  <!-- Футер сайта -->
  <?php require "blocks/footer.php" ?>
</body>
</html>
