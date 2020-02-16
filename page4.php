<!-- page4.php -->
<?php
$answers = [
  "q1" => "2",
  "q2" => "4",
  "q3" => "1",
  "q4" => "2"
];
?>
<!DOCTYPE html>
<html lang="en">

<head>
  <meta charset="UTF-8">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <title>Проверка знания языка программирования PHP</title>
  <link rel="stylesheet" href="style.css">
</head>

<body>
  <div class="container">
    <nav>
      <ul class="main-menu">
        <li><a href="/">Главная</a></li>
        <li><a href="/page1.html">HTML</a></li>
        <li><a href="/page2.html">CSS</a></li>
        <li><a href="/page3.html">JS</a></li>
        <li class="active"><a href="/page4.php">PHP</a></li>
      </ul>
    </nav>

    <?php if (isset($_POST['test'])) : ?>
      <h1>Результаты теста</h1>
      <?php
      $count = 0;
      foreach ($answers as $key => $val) {
        if (isset($_POST[$key]) && $_POST[$key] === $val) {
          $count++;
        }
      }
      ?>
      <div>Количество правильных ответов: <?= $count ?></div>
    <?php else : ?>
      <h1>Проверка знания языка программирования PHP</h1>
      <form method="post">
        <h3>1. С помощью какого символа в PHP можно склеить 2 строки в одну?</h3>
        <label><input type="radio" name="q1" value="1" />символ запятой</label>
        <label><input type="radio" name="q1" value="2" />символ точки</label>
        <label><input type="radio" name="q1" value="4" />символ доллара</label>

        <h3>
          2. Что будет в переменной $result после выполнения кода $result = (true
          xor true)?
        </h3>
        <label><input type="radio" name="q2" value="1" />1</label>
        <label><input type="radio" name="q2" value="2" />0</label>
        <label><input type="radio" name="q2" value="3" />true</label>
        <label><input type="radio" name="q2" value="4" />false</label>

        <h3>
          3. Как получить данные POST-запроса?
        </h3>
        <label><input type="radio" name="q3" value="1" />через переменную
          $_POST</label>
        <label><input type="radio" name="q3" value="2" />через функцию
          getPostData()</label>
        <label><input type="radio" name="q3" value="3" />через константу POST</label>

        <h3>4. Какой из этих операторов не относится к группе условных?</h3>
        <label><input type="radio" name="q4" value="1" />if</label>
        <label><input type="radio" name="q4" value="2" />===</label>
        <label><input type="radio" name="q4" value="3" />switch</label>

        <input type="hidden" name="test">

        <div class="row">
          <input type="submit" value="Завершить" />
        </div>
      </form>
    <?php endif ?>
  </div>
</body>

</html>