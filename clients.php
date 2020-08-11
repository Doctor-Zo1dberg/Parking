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

    <title>Клиенты автостоянки</title>    
  </head>

  <body style="background-color: #FFFFE0">
    <header>
      <?php include 'navbar.php'; ?>
    </header>
    <h1 style="text-align: center; text-transform: uppercase;">Клиенты</h1>
    <div class="container-fluid">
      <div class="row">
        <div class="col mt-1">
          <a class="btn btn-success" href="add_client.php" role="button">Добавить клиента</a>
          <table class="table table-dark">
            <thead>
              <tr style="text-align:center;">
                <th>Клиент №</th>
                <th>Имя</th>
                <th>Отчество</th>
                <th>Фамилия</th>
                <th>Пол</th>
                <th>Телефон</th>
                <th>Адрес</th>
                <th>Действие</th>
              </tr>
            </thead>
            <?php foreach ($sqlrc as $value) { ?>
            <tr style="text-align:center;">
              <td><?=$value['id'] ?></td>
              <td><?=$value['name'] ?></td>
              <td><?=$value['patronymic'] ?></td>
              <td><?=$value['surname'] ?></td>
              <td><?=$value['sex'] ?></td>
              <td><?=$value['phone'] ?></td>
              <td><?=$value['address'] ?></td>
              <td>
                <a href="?edit_clients=<?=$value['id'] ?>" class="btn btn-secondary btn-sm" data-toggle="modal" data-target="#editModal_clients<?=$value['id'] ?>">Edit</a> 
                <a href="?delete_clients=<?=$value['id'] ?>" class="btn btn-danger btn-sm" data-toggle="modal" data-target="#deleteModal_clients<?=$value['id'] ?>">Delete</a>
                <?php require 'modal.php'; ?>
              </td>
            </tr> <?php } ?>
          </table>
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