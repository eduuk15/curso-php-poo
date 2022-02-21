<html>
    <head>
        <meta charset="utf-8">
        <title> Listagem de carros </title>
        <link href="css/list.css" rel="stylesheet" type="text/css" media="screen" />
    </head>
    <body>
    <table border=1>
    <thead>
        <tr>
            <td></td>
            <td></td>
            <td>Ano</td>
            <td>km</td>
            <td>Marca</td>
            <td>Modelo</td>
        </tr>
    </thead>
    <tbody>
        <?php
            $conn = pg_connect('host=localhost port=5432 dbname=carros user=postgres password=postgres');
            $result = pg_query($conn, 'SELECT * from carro ORDER BY id');
            
            while ($row = pg_fetch_assoc($result))
            {
                $id        = $row['id'];
                $ano      = $row['ano'];
                $km  = $row['km'];
                $id_marca    = $row['id_marca'];
                $id_modelo  = $row['id_modelo'];
                
                
                print '<tr>';
                print "<td> <a href='pessoa_form_edit.php?id={$id}'>
                             <img src='images/edit.svg' style='width:17px'>
                            </a> </td>";
                print "<td> <a href='pessoa_delete.php?id={$id}'>
                             <img src='images/remove.svg' style='width:17px'>
                            </a> </td>";
                print "<td> {$id} </td>";
                print "<td> {$ano} </td>";
                print "<td> {$km} </td>";
                print '</tr>';
            }
        ?>
    </tbody>
    </table>
    
    <button onclick="window.location='pessoa_form_insert.php'">
        <img src="images/insert.svg" style="width:17px"> Inserir
    </button>
    
    </body>
</html>
