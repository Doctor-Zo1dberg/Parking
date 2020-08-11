<!-- Modal Edit clients-->
<div class="modal fade" id="editModal_clients<?=$value['id'] ?>" tabindex="-1" role="dialog" aria-labelledby="exampleModalLabel" aria-hidden="true">
  <div class="modal-dialog modal-dialog-centered" role="document">
    <div class="modal-content shadow">
      <div class="modal-header">
        <h5 class="modal-title">Редактировать клиента № <?=$value['id'] ?></h5>
        <button type="button" class="close" data-dismiss="modal" aria-label="Close">
          <span aria-hidden="true">&times;</span>
        </button>
      </div>
      <div class="modal-body">
        <form action="?id=<?=$value['id'] ?>" method="post">
        	<div class="form-group">
        		<input type="text" class="form-control" name="edit_name" value="<?=$value['name'] ?>" placeholder="Имя">
        	</div>
        	<div class="form-group">
        		<input type="text" class="form-control" name="edit_patronymic" value="<?=$value['patronymic'] ?>" placeholder="Отчество">
        	</div>
        	<div class="form-group">
        		<input type="text" class="form-control" name="edit_surname" value="<?=$value['surname'] ?>" placeholder="Фамилия">
        	</div>
          <div class="form-group">
            <input type="text" class="form-control" name="edit_sex" value="<?=$value['sex'] ?>" placeholder="Пол">
          </div>
          <div class="form-group">
            <input type="text" class="form-control" name="edit_phone" value="<?=$value['phone'] ?>" placeholder="Телефон">
          </div>
          <div class="form-group">
            <input type="text" class="form-control" name="edit_address" value="<?=$value['address'] ?>" placeholder="Адрес">
          </div>
        	<div class="modal-footer">
        		<button type="submit" name="edit_submit_clietns" class="btn btn-primary">Обновить</button>
        	</div>
        </form>	
      </div>
    </div>
  </div>
</div>


<!-- Modal Edit vehicles-->
<div class="modal fade" id="editModal_vehicles<?=$value['id'] ?>" tabindex="-1" role="dialog" aria-labelledby="exampleModalLabel" aria-hidden="true">
  <div class="modal-dialog modal-dialog-centered" role="document">
    <div class="modal-content shadow">
      <div class="modal-header">
        <h5 class="modal-title">Редактировать клиента № <?=$value['id'] ?></h5>
        <button type="button" class="close" data-dismiss="modal" aria-label="Close">
          <span aria-hidden="true">&times;</span>
        </button>
      </div>
      <div class="modal-body">
        <form action="?id=<?=$value['id'] ?>" method="post">
          <div class="form-group">
            <input type="text" class="form-control" name="edit_brand" value="<?=$value['brand'] ?>" placeholder="Марка">
          </div>
          <div class="form-group">
            <input type="text" class="form-control" name="edit_model" value="<?=$value['model'] ?>" placeholder="Модель">
          </div>
          <div class="form-group">
            <input type="text" class="form-control" name="edit_color" value="<?=$value['color'] ?>" placeholder="Цвет">
          </div>
          <div class="form-group">
            <input type="text" class="form-control" name="edit_plate" value="<?=$value['plate'] ?>" placeholder="Гос. номер">
          </div>
          <div class="modal-footer">
            <button type="submit" name="edit_submit_vehicles" class="btn btn-primary">Обновить</button>
          </div>
        </form> 
      </div>
    </div>
  </div>
</div>

<!-- DELETE MODAL CLIENTS -->
<div class="modal fade" id="deleteModal_clients<?=$value['id'] ?>" tabindex="-1" role="dialog" aria-labelledby="exampleModalLabel" aria-hidden="true">
  <div class="modal-dialog modal-dialog-centered" role="document">
    <div class="modal-content shadow">
      <div class="modal-header">
        <h5 class="modal-title" id="exampleModalLabel">Удалить запись № <?=$value['id'] ?></h5>
        <button type="button" class="close" data-dismiss="modal" aria-label="Close">
          <span aria-hidden="true">&times;</span>
        </button>
      </div>
      <div class="modal-footer">
        <button type="button" class="btn btn-secondary" data-dismiss="modal">Отмена</button>
        <form action="?id=<?=$value['id'] ?>" method="post">
        	<button type="submit" name="delete_submit_clietns" class="btn btn-danger">Удалить</button>
    	</form>
      </div>
    </div>
  </div>
</div>


<!-- DELETE MODAL VEHICELS -->
<div class="modal fade" id="deleteModal_vehicles<?=$value['id'] ?>" tabindex="-1" role="dialog" aria-labelledby="exampleModalLabel" aria-hidden="true">
  <div class="modal-dialog modal-dialog-centered" role="document">
    <div class="modal-content shadow">
      <div class="modal-header">
        <h5 class="modal-title" id="exampleModalLabel">Удалить запись № <?=$value['id'] ?></h5>
        <button type="button" class="close" data-dismiss="modal" aria-label="Close">
          <span aria-hidden="true">&times;</span>
        </button>
      </div>
      <div class="modal-footer">
        <button type="button" class="btn btn-secondary" data-dismiss="modal">Отмена</button>
        <form action="?id=<?=$value['id'] ?>" method="post">
          <button type="submit" name="delete_submit_vehicles" class="btn btn-danger">Удалить</button>
      </form>
      </div>
    </div>
  </div>
</div>