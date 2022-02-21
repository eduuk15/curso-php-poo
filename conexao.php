<?php
$dados = $_POST;
echo 'entrou';
$conn = pg_connect('host=postgres dbname=carros user=postgres password=postgres');

$result = pg_query($conn, 'SELECT * FROM marca');
echo $result;
$row = pg_fetch_assoc($result);
var_dump($row);
