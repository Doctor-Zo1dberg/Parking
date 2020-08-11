<?php
include 'func.php';
include 'config.php';
?>

<!DOCTYPE html>
<html lang ="en">

  <head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">

    <link  rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/4.0.0/css/bootstrap.min.css" integrity="sha384-Gn5384xqQ1aoWXA+058RXPxPg6fy4IWvTNh0E263XmFcJlSAwiGgFAW/dAiS6JXm" crossorigin="anonymous">
    <link rel="stylesheet" href="main.css">

    <title>Учет автомобилей автостоянки</title>    
  </head>

  <body style="background-color: #FFFFE0">
    <header>
      <?php include 'navbar.php'; ?>
    </header>
      <h1 style="text-align:center;">ПАРКОВКА</h1>
      <div class="container-fluid">
        <div class="row">
          <div class="col mt-1">
            <table class="table table-dark">
              <thead>
                <tr style="text-align:center;">
                  <th>Автомобиль №</th>
                  <th>Клиент №</th>
                  <th>Фамилия</th>
                  <th>Марка</th>
                  <th>Модель</th>
                  <th>Гос. номрер</th>
                  <th>Телефон</th>
                  <th>Статус</th>
                  <th>Действие</th>
                </tr>
              </thead>
                <?php foreach ($sqlri as $value) { ?>
                <tr style="text-align:center;">
                  <td><?=$value['vehicle_id'] ?></td>
                  <td><?=$value['id'] ?></td>
                  <td><?=$value['surname'] ?></td>
                  <td><?=$value['brand'] ?></td>
                  <td><?=$value['model'] ?></td>
                  <td><?=$value['plate'] ?></td>
                  <td><?=$value['phone'] ?></td>
                  <td><?=$value['status'] ?></td>
                  <td>
                    <form method="POST" action="func.php">
                      <input type="text" name="number" value=<?=$value['vehicle_id'] ?> hidden>
                      <button type="submit" name="submit_on" class="btn btn-success">On</button>
                      <button type="submit" name="submit_off" class="btn btn-danger">Off</button>
                    </form>
                  </td>
                </tr> <?php } ?>
            </table>
            <!-- pagination -->
          </div>
        </div>
    </div>

    <!-- Optional JavaScript -->
        <!-- jQuery first, then Popper.js, then Bootstrap JS -->
        <script src="https://code.jquery.com/jquery-3.5.1.slim.min.js" integrity="sha384-DfXdz2htPH0lsSSs5nCTpuj/zy4C+OGpamoFVy38MVBnE+IbbVYUew+OrCXaRkfj" crossorigin="anonymous"></script>
        <script src="https://cdn.jsdelivr.net/npm/popper.js@1.16.0/dist/umd/popper.min.js" integrity="sha384-Q6E9RHvbIyZFJoft+2mJbHaEWldlvI9IOYy5n3zV9zzTtmI3UksdQRVvoxMfooAo" crossorigin="anonymous"></script>
        <script src="https://stackpath.bootstrapcdn.com/bootstrap/4.5.0/js/bootstrap.min.js" integrity="sha384-OgVRvuATP1z7JjHLkuOU7Xw704+h835Lr+6QL9UvYjZE3Ipu6Tp75j7Bh/kR0JKI" crossorigin="anonymous"></script>
  </body>

</html>