<?php
$dados = $_POST;
echo 'entrou';
$conn = pg_connect('host=localhost port=5432 dbname=carros user=postgres password=postgres');

$result = pg_query($conn, 'SELECT max(id) as next FROM carro');
echo $result;
$row = pg_fetch_assoc($result);
echo $row;
$next = (int) $row['next'] + 1;

$sql = "INSERT INTO carro (id, id_marca, id_modelos,
           ano, km)
       VALUES ( '{$next}',
                '{$dados['id_marca']}',
                '{$dados['id_modelos']}',
                '{$dados['ano']}',
                '{$dados['km']}')";

$result = pg_query($conn, $sql);

if ($result)
{
    print 'Registro inserido com sucesso';
}
else
{
    print 'erro123';
}

pg_close($conn);
