<?php

$dbh = connectToDatabase();

// Tabelle benötigt folgende Spalten:
// id, int, auto_increment
// name, varchar
// message, text

$statement = $dbh->prepare('INSERT INTO entries (id, name, titel, message, date, image) VALUES (:id, :name, :titel, :message, NOW(), :image)');



$statement->bindParam(':name', $_POST['name']);
$statement->bindParam(':id', $_POST['id']);
$statement->bindParam(':titel', $_POST['titel']);
$statement->bindParam(':message', $_POST['message']);
$statement->bindParam(':image', $_POST['link']);

$statement->execute();

header('Location: list');

?>
<?php

$dbh = connectToDatabase();

// Tabelle benötigt folgende Spalten:
// id, int, auto_increment
// name, varchar
// message, text

$statement = $dbh->prepare('INSERT INTO rating (name, message, date) VALUES (:name, :message, NOW())');



$statement->bindParam(':name', $_POST['name']);
$statement->bindParam(':message', $_POST['message']);



$statement->execute();

header('Location: list');