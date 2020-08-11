<?php
include 'config.php';

// Read index
$sqlri = $pdo->prepare('SELECT c.id, v.vehicle_id, v.plate, v.brand, v.model, c.phone, c.surname, v.status FROM `vehicles` AS v, `clients` AS c WHERE v.owner_fk = c.id ORDER BY c.id');
$sqlri->execute();


// Read clients
$sqlrc = $pdo->prepare('SELECT * FROM `clients` ORDER BY id');
$sqlrc->execute();


// Read vehicles
$sqlrv = $pdo->prepare('SELECT c.id, v.vehicle_id, v.plate, v.brand, v.model, v.color, v.status FROM `vehicles` v LEFT JOIN `clients` c ON c.id = v.owner_fk ORDER BY c.id');
$sqlrv->execute();


//adding new client
if(isset($_POST['add_client'])){
	$sql = ("INSERT INTO `clients`(`name`, `patronymic`,`surname`, `sex`, `phone`,`address`)VALUES(?,?,?,?,?,?)");
	$query = $pdo->prepare($sql);
	$query->execute([$_POST[name],$_POST[patronymic],$_POST[surname],$_POST[sex],$_POST[phone],$_POST[address]]);
	$sql = ("INSERT INTO `vehicles`(`brand`,`model`,`color`,`plate`,`owner_fk`) VALUES(?,?,?,?,?)");
	$query = $pdo->prepare($sql);
	$query->execute([$_POST[brand],$_POST[model],$_POST[color],$_POST[plate],  $pdo->lastInsertId()]);
	require_once 'clients.php';
}


//adding new vehicle
if(isset($_POST['submit_add_vehicle'])){
	$sql = ("INSERT INTO `vehicles`(`brand`,`model`,`color`,`plate`,`owner_fk`) VALUES(?,?,?,?,?)");
	$query = $pdo->prepare($sql);
	$query->execute([$_POST[brand],$_POST[model],$_POST[color],$_POST[plate],$_POST[owner_fk]]);
	require_once 'vehicles.php';
}


// Update clients
if (isset($_POST['edit_submit_clietns'])) {
	$sqll = "UPDATE clients SET name=?, patronymic=?, surname=?, sex=?, phone=?, address=? WHERE id=?";
	$querys = $pdo->prepare($sqll);
	$querys->execute([$_POST[edit_name], $_POST[edit_patronymic], $_POST[edit_surname], $_POST[edit_sex], $_POST[edit_phone], $_POST[edit_address], $_GET[id]]);
	header('Location: '. $_SERVER['HTTP_REFERER']);
	require_once 'clients.php';
}


// Update vehicles
if (isset($_POST['edit_submit_vehicles'])) {
	$sqll = "UPDATE vehicles SET brand=?, model=?, color=?, plate=? WHERE vehicle_id=?;";
	$querys = $pdo->prepare($sqll);
	$querys->execute([$_POST[edit_brand], $_POST[edit_model], $_POST[edit_color], $_POST[edit_plate], $_GET[id]]);
	header('Location: '. $_SERVER['HTTP_REFERER']);
	require_once 'vehicles.php';
}


// Delete client with vehicles
if (isset($_POST['delete_submit_clietns'])) {
	$sql = "DELETE FROM clients WHERE id=?";
	$query = $pdo->prepare($sql);
	$query->execute([$_GET[id]]);
	header('Location: '. $_SERVER['HTTP_REFERER']);
	require_once 'clients.php';
}


// Delete vehicles
if (isset($_POST['delete_submit_vehicles'])) {
	$sql = "DELETE FROM vehicles WHERE vehicle_id=?";
	$query = $pdo->prepare($sql);
	$query->execute([$_GET[id]]);
	header('Location: '. $_SERVER['HTTP_REFERER']);
	require_once 'vehicles.php';
}


// Update status
if (isset($_POST['submit_on'])) {
	$sqll = "UPDATE vehicles SET status=? WHERE vehicle_id=?";
	$querys = $pdo->prepare($sqll);
	$querys->execute([1, $_POST[number]]);
	header('Location: '. $_SERVER['HTTP_REFERER']);
	require_once 'index.php';
}


// Update status
if (isset($_POST['submit_off'])) {
	$sqll = "UPDATE vehicles SET status=? WHERE vehicle_id=?";
	$querys = $pdo->prepare($sqll);
	$querys->execute([0, $_POST[number]]);
	header('Location: '. $_SERVER['HTTP_REFERER']);
	require_once 'index.php';
}