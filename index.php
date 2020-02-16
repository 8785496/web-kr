<!-- index.php -->
<?php
$cards = [
  [
    "title" => "Язык разметки гипертекста HTML",
    "url" => "/page1.html",
    "imgUrl" => "/img/html.svg"
  ],
  [
    "title" => "Каскадные таблицы стилей CSS",
    "url" => "/page2.html",
    "imgUrl" => "/img/css.svg"
  ],
  [
    "title" => "Клиентский скриптовый язык JavaScript",
    "url" => "/page3.html",
    "imgUrl" => "/img/javascript.svg"
  ],
  [
    "title" => "Серверный скриптовый язык PHP",
    "url" => "/page4.html",
    "imgUrl" => "/img/php.svg"
  ],
];
?>
<!DOCTYPE html>
<html lang="en">

<head>
  <meta charset="UTF-8">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <title>Главная</title>
  <link rel="stylesheet" href="style.css">
</head>

<body>
  <div class="container">
    <nav>
      <ul class="main-menu">
        <li class="active"><a href="/">Главная</a></li>
        <li><a href="/page1.html">HTML</a></li>
        <li><a href="/page2.html">CSS</a></li>
        <li><a href="/page3.html">JS</a></li>
        <li><a href="/page4.php">PHP</a></li>
      </ul>
    </nav>

    <div class="cards">
      <?php foreach ($cards as $card) : ?>
        <div>
          <div class="card">
            <img src="<?= $card["imgUrl"] ?>" alt="" srcset="">
            <div class="card-title"><?= $card["title"] ?></div>
            <a href="<?= $card["url"] ?>">Перейти</a>
          </div>
        </div>
      <?php endforeach ?>
    </div>
  </div>
</body>

</html>