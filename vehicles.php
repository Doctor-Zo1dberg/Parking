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

    <title>Автомобили автостоянки</title>    
  </head>

  <body style="background-color: #FFFFE0">
    <header>
      <?php include 'navbar.php'; ?>
    </header>
    <h1 style="text-align: center; text-transform: uppercase;">Автомобили</h1>
    <div class="container-fluid">
      <div class="row">
        <div class="col mt-1">
          <a class="btn btn-success" href="add_vehicle.php" role="button">Добавить автомобиль</a>
          <table class="table table-dark">
              <tr style="text-align:center;">
                <th>Автомобиль клиента №</th>
                <th>Авто №</th>
                <th>Марка</th>
                <th>Модель</th>
                <th>Цвет</th>
                <th>Гос. номер</th>
                <th>Статус</th>
                <th>Действие</th>
              </tr>
            </thead>
            <?php foreach ($sqlrv as $value) { ?>
            <tr style="text-align:center;">
              <td><?=$value['id'] ?></td>
              <td><?=$value['vehicle_id'] ?></td>
              <td><?=$value['brand'] ?></td>
              <td><?=$value['model'] ?></td>
              <td><?=$value['color'] ?></td>
              <td><?=$value['plate'] ?></td>
              <td><?=$value['status'] ?></td>
              <?php $value['id']=$value['vehicle_id'] ?>
              <td>
                <a href="?edit_vehicles=<?=$value['id'] ?>" class="btn btn-secondary btn-sm" data-toggle="modal" data-target="#editModal_vehicles<?=$value['id'] ?>">Edit</a> 
                <a href="?delete_vehicles=<?=$value['id'] ?>" class="btn btn-danger btn-sm" data-toggle="modal" data-target="#deleteModal_vehicles<?=$value['id'] ?>">Delete</a>
                <?php require 'modal.php'; ?>
              </td>
            </tr> <?php } ?>
          </table>
        </div>
      </div>
    </div >



  <<!-- Optional JavaScript -->
        <!-- jQuery first, then Popper.js, then Bootstrap JS -->
        <script src="https://code.jquery.com/jquery-3.5.1.slim.min.js" integrity="sha384-DfXdz2htPH0lsSSs5nCTpuj/zy4C+OGpamoFVy38MVBnE+IbbVYUew+OrCXaRkfj" crossorigin="anonymous"></script>
        <script src="https://cdn.jsdelivr.net/npm/popper.js@1.16.0/dist/umd/popper.min.js" integrity="sha384-Q6E9RHvbIyZFJoft+2mJbHaEWldlvI9IOYy5n3zV9zzTtmI3UksdQRVvoxMfooAo" crossorigin="anonymous"></script>
        <script src="https://stackpath.bootstrapcdn.com/bootstrap/4.5.0/js/bootstrap.min.js" integrity="sha384-OgVRvuATP1z7JjHLkuOU7Xw704+h835Lr+6QL9UvYjZE3Ipu6Tp75j7Bh/kR0JKI" crossorigin="anonymous"></script>
</body>

</html>