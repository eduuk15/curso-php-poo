<?php
function lista_marcas_carro( $id_marca = null )
{
    $conn = pg_connect('host=postgres dbname=carros user=postgres password=postgres');

    $output = '';
    $result = pg_query($conn, 'SELECT id, nome FROM marca;');
    if ($result)
    {
        while ($row = pg_fetch_assoc($result))
        {
            
            $id = $row['id'];
            $nome = $row['nome'];
            $check = ($id == $id_marca) ? 'selected=1' : '';
            $output .= "<option {$check} value='{$id}'> $nome </option>";
        }
        
    }

    pg_close($conn);
    return $output;
}