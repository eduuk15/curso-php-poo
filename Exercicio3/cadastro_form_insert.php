<html>
    <head>
        <meta charset = "UTF-8">
        <title> Cadastro de carro </title>
        <link href="css/form.css" rel="stylesheet" type="text/css" media="screen"/>
    </head>
    <body>
        
    <form enctype="multipart/form-data" method="post" action="carro_save_insert.php">
            <label> Código </label>
            <input name="id" readonly="1" type="text" style="width:30%">
            
            <label> Ano </label>
            <input name="ano" type="text" style="width:50%">
            
            <label> km </label>
            <input name="km" type="text" style="width:25%">

            <label> Marca </label>
            <select name="id_marca" style="width:25%">
                <?php
                    require_once 'lista_marcas_carro.php';
                    print lista_marcas_carro();
                ?>
            </select>
            
            

            <label> Modelo </label>
            <select name="id_modelo" style="width:50%">
                <?php
                    require_once 'lista_modelos_carro.php';
                    print lista_modelos_carro();
                ?>
            </select>
            
            
            <input type="submit">
        </form>
    </body>
</html>