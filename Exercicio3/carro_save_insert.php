<?php
$dados = $_POST;
$conn = pg_connect('host=postgres dbname=carros user=postgres password=postgres');

$result = pg_query($conn, 'SELECT max(id) as next FROM carro');
$row = pg_fetch_assoc($result);
$next = (int) $row['next'] + 1;

$sql = "INSERT INTO carro (id, id_marca, id_modelo,
           ano, km)
       VALUES ( '{$next}',
                '{$dados['id_marca']}',
                '{$dados['id_modelo']}',
                '{$dados['ano']}',
                '{$dados['km']}')";
echo $sql;
$result = pg_query($conn, $sql);

if ($result)
{
    print 'Registro inserido com sucesso';
}
else
{
    print 'erro';
}

pg_close($conn);
