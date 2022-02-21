<html>
    <head>
        <meta charset="utf-8">
        <title> Cadastro de carro </title>
        <link href="css/form.css" rel="stylesheet" type="text/css" media="screen"/>
    </head>
    <body>
        <?php
            if (!empty($_GET['id']))
            {
                $conn = pg_connect('host=localhost port=5432 dbname=carros user=postgres password=postgres');
                $id = (int) $_GET['id'];
                $result = pg_query($conn, "SELECT * FROM carro WHERE id='{$id}'");
                $row = pg_fetch_assoc($result);
                
                $id         = $row['id'];
                $ano        = $row['ano'];
                $km         = $row['km'];
                $id_marca   = $row['id_marca'];
                $id_modelo  = $row['id_modelo'];
            }
        ?>
        <form enctype="multipart/form-data" method="post" action="pessoa_save_update.php">
            <label> Código </label>
            <input name="id" readonly="1" type="text" style="width:30%" value="<?=$id?>">
            
            <label> Ano </label>
            <input name="ano" type="text" style="width:50%" value="<?=$nome?>">
            
            <label> km </label>
            <input name="km" type="text" style="width:50%" value="<?=$endereco?>">
            
            <label> Marca </label>
            <select name="id_marca" style="width:25%">
                <?php
                    require_once 'lista_marcas_carro.php';
                    print lista_marcas_carro( $id_marca );
                ?>
            </select>
            
            <label> Modelo </label>
            <select name="id_modelo" style="width:50%">
                <?php
                    require_once 'lista_modelos_carro.php';
                    print lista_modelos_carro( $id_modelos );
                ?>
            </select>
            
            
            <input type="submit">
        </form>
    </body>
</html>