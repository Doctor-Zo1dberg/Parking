<?php
try {
	$pdo = new PDO('mysql:dbname=parking; host=localhost.park', 'root', 'root');
} catch (PDOException $e) {
	die($e->getMessage());
}