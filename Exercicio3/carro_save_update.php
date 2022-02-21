<?php
$dados = $_POST;

if ($dados['id'])
{
    $conn = pg_connect('host=postgres dbname=carros user=postgres password=postgres');
    
    $sql = "UPDATE carro SET  marca      = '{$dados['id_marca']}',
                              modelo  = '{$dados['id_modelo']}',
                              ano    = '{$dados['ano']}',
                              km  = '{$dados['km']}',
                          WHERE id = '{$dados['id']}'";
    $result = pg_query($conn, $sql);
    
    if ($result)
    {
        print 'Registro atualizado com sucesso';
    }
    else
    {
        print pg_last_error($conn);
    }
    pg_close($conn);
}
