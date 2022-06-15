<?php

$titulo=$_POST['titulo'];
$descrição=$_POST['descrição'];

$stmt=connect->('INSERT  INTO posts titulo, descrição VALUES [:titulo  
:descrição]' );

$stmt->bindParam['titulo'];
$stmt->bindParam['descrição'];


?>