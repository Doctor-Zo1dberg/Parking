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

    <title>Добавление клинета автостоянки</title>    
  </head>

  <body style="background-color: #FFFFE0">
    <style type="text/css"> .container{width: 200px; margin: 0 auto;} </style>

    <br><br><br>
    <h2 style="text-align: center; text-transform:uppercase;">Добавить автомобиль</h2>
    <?php include'navbar.php'; ?>
    <div class ="container">
      <form method="POST" action="func.php">
        <input type="text" placeholder="Марка" name="brand"><br>
        <input type="text" placeholder="Модель" name="model"><br>
        <input type="text" placeholder="Цвет" name="color"><br>
        <input type="text" placeholder="Гос. номер" name="plate"><br><br>
        <select  name="owner_fk" size="1">
          <?php 
          $stmt = $pdo->prepare('SELECT * FROM clients');
          $stmt->execute();
          foreach($stmt as $value){ ?>
          <option value=<?=$value['id'] ?>><?=$value['id'],' ',$value['surname'],' ',$value['name'],' ',$value['phone'] ?></option>
          <?php }?>
        </select><br>
        <button type="submit" name="submit_add_vehicle">Добавить</button>
      </form>
    </div>

       

    <!-- Optional JavaScript -->
        <!-- jQuery first, then Popper.js, then Bootstrap JS -->
        <script src="https://code.jquery.com/jquery-3.5.1.slim.min.js" integrity="sha384-DfXdz2htPH0lsSSs5nCTpuj/zy4C+OGpamoFVy38MVBnE+IbbVYUew+OrCXaRkfj" crossorigin="anonymous"></script>
        <script src="https://cdn.jsdelivr.net/npm/popper.js@1.16.0/dist/umd/popper.min.js" integrity="sha384-Q6E9RHvbIyZFJoft+2mJbHaEWldlvI9IOYy5n3zV9zzTtmI3UksdQRVvoxMfooAo" crossorigin="anonymous"></script>
        <script src="https://stackpath.bootstrapcdn.com/bootstrap/4.5.0/js/bootstrap.min.js" integrity="sha384-OgVRvuATP1z7JjHLkuOU7Xw704+h835Lr+6QL9UvYjZE3Ipu6Tp75j7Bh/kR0JKI" crossorigin="anonymous"></script>
  </body>

</html>