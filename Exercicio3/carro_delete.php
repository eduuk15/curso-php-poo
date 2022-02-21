<?php
$dados = $_GET;

if ($dados['id'])
{
    $conn = pg_connect('host=postgres dbname=carros user=postgres password=postgres');
    
    $id  = (int) $dados['id'];
    $sql = "DELETE FROM carro WHERE id='{$id}'";
    
    $result = pg_query($conn, $sql);
    
    if ($result)
    {
        print 'Registro excluído com sucesso';
    }
    else
    {
        print pg_last_error($conn);
    }
    pg_close($conn);
}
