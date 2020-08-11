<?php
include 'func.php';
?>

<!DOCTYPE html>
<html lang ="en">

  <head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">

    <link  rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/4.0.0/css/bootstrap.min.css" integrity="sha384-Gn5384xqQ1aoWXA+058RXPxPg6fy4IWvTNh0E263XmFcJlSAwiGgFAW/dAiS6JXm" crossorigin="anonymous">
    <link rel="stylesheet" href="main.css">
    <script src="http://code.jquery.com/jquery-1.8.3.js"></script>

    <title>Регистрация клинета автостоянки</title>    
  </head>

  <body style="background-color: #FFFFE0">
    <style type="text/css"> .container{width: 200px; margin: 0 auto;} </style>
    <header>
      <?php include 'navbar.php'; ?>
    </header>

      <h2 style="text-align: center; text-transform:uppercase;">Регистрация клиента</h2>
      <br>
      <h3 style="text-align:center;text-transform:uppercase;">Клиент</h3>
      <div class ="container">
          <form method="POST" action="func.php">
            <input type="text" placeholder="Имя" name="name"><br>
            <input type="text" placeholder="Отчество" name="patronymic"><br>
            <input type="text" placeholder="Фамилия" name="surname"><br>
            <input type="text" placeholder="Пол" name="sex"><br>
            <input type="text" placeholder="Телефон" name="phone"><br>
            <input type="text" placeholder="Адрес" name="address"><br>
            <h3 style="text-align:center;text-transform:uppercase;">Автомобиль</h3>
            <input type="text" placeholder="Марка" name="brand"><br>
            <input type="text" placeholder="Модель" name="model"><br>
            <input type="text" placeholder="Цвет" name="color"><br>
            <input type="text" placeholder="Гос. номер" name="plate"><br>
            <br>
            <button type="submit" name="add_client">Зарегистрировать клиента</button>
          </form> <br><br>
      </div>
       

    <!-- Optional JavaScript -->
        <!-- jQuery first, then Popper.js, then Bootstrap JS -->
        <script src="https://code.jquery.com/jquery-3.5.1.slim.min.js" integrity="sha384-DfXdz2htPH0lsSSs5nCTpuj/zy4C+OGpamoFVy38MVBnE+IbbVYUew+OrCXaRkfj" crossorigin="anonymous"></script>
        <script src="https://cdn.jsdelivr.net/npm/popper.js@1.16.0/dist/umd/popper.min.js" integrity="sha384-Q6E9RHvbIyZFJoft+2mJbHaEWldlvI9IOYy5n3zV9zzTtmI3UksdQRVvoxMfooAo" crossorigin="anonymous"></script>
        <script src="https://stackpath.bootstrapcdn.com/bootstrap/4.5.0/js/bootstrap.min.js" integrity="sha384-OgVRvuATP1z7JjHLkuOU7Xw704+h835Lr+6QL9UvYjZE3Ipu6Tp75j7Bh/kR0JKI" crossorigin="anonymous"></script>
  </body>

</html>