<?php
$dsn= "pgsql:host=localhost;dbname=tasks";

try 
{
    $pdo =new PDO ($dsn, "postgres","");
    echo "Ну здорово, отец!";
}
catch(PDOException $e) 
{
    die("Подключение не удалось :-(."."\n".$e->getMessage());
}
?>