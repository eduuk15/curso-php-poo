<?php
function lista_modelos_carro( $id_modelo = null )
{
    $conn = pg_connect('host=localhost port=5432 dbname=carros user=postgres password=postgres');

    $output = '';
    $result = pg_query($conn, 'SELECT id, nome FROM modelos');
    if ($result)
    {
        while ($row = pg_fetch_assoc($result))
        {
            $id = $row['id'];
            $nome = $row['nome'];
            $check = ($id == $id_modelos) ? 'selected=1' : '';
            $output .= "<option {$check} value='{$id}'> $nome </option>";
        }
    }
    pg_close($conn);
    return $output;
}
