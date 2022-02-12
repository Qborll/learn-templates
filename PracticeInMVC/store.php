<?php
$filename = uploadImage($_FILES['image']);
echo '<pre>';
var_dump($_POST,$_FILES);die;
echo '</pre>';
//$connect = mysqli_connect('localhost','root','','example01');

$pdo = new PDO('mysql:host=localhost;dbname=example01','root','');

$sql = "INSERT INTO posts (title, description) VALUE (:title, :description, :image)";

$statement=$pdo->prepare($sql);
$statement->bindParam(":title",$_POST['title']);
$statement->bindParam(":description",$_POST['description']);
$statement->execute();
