<?php

$dbh = connectToDatabase();

// Tabelle benötigt folgende Spalten:
// id, int, auto_increment
// name, varchar
// message, text

$statement = $dbh->prepare('INSERT INTO entries (name, titel, message, date, image) VALUES (:name, :titel, :message, NOW(), :image)');



$statement->bindParam(':name', $_POST['name']);
$statement->bindParam(':titel', $_POST['titel']);
$statement->bindParam(':message', $_POST['message']);
$statement->bindParam(':image', $_POST['link']);

$statement->execute();

header('Location: list');