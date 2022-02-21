<!DOCTYPE html>
<html lang="pt-br">
    <meta charset = "UTF-8"/>
    <title>Tabela de Informações</title>
</head>
<body>
    <table border="2px" bgcolor="#CCC">
        <caption>Cadastro de Consumidores</caption>
        <tr>
            <th rowspan="2">
                <?php

                    $codigo_Eduardo = '002';

                    $nome_Eduardo = 'Eduardo';

                    echo "{$nome_Eduardo}{$codigo_Eduardo}";
                ?>
            </th>

            <td>Código</td>
            <td>Nome</td>
            <td>Endereço</td>
        </tr>


        <tr>
            <td>
                <?php
                    
                    $codigo_Eduardo = '001';

                    echo "$codigo_Eduardo";
                ?>

            </td>

            <td>
                <?php
                    
                    $nome_Eduardo = 'Eduardo';

                    echo "$nome_Eduardo";
                ?>
            </td>
            
            <td>
                <?php
                    
                    $endereco_Eduardo = 'Rua Elma Lenzi, 275';

                    echo "$endereco_Eduardo";
                ?>
            </td>
        </tr>

        <tr>
            <th rowspan="2">
                <?php

                    $codigo_Joao = '001';

                    $nome_Joao = 'João';

                    echo "{$nome_Joao}{$codigo_Joao}";
                ?>
            </th>

            <td>Código</td>
            <td>Nome</td>
            <td>Endereço</td>
        </tr>

        <tr>
            <td>
                <?php
                    
                    $codigo_Joao = '001';

                    echo "$codigo_Joao";
                ?>

            </td>

            <td>
                <?php
                    
                    $nome_Joao = 'João';

                    echo "$nome_Joao";
                ?>
            </td>
            
            <td>
                <?php
                    
                    $endereco_Joao = 'Avenida Paulista, 190';

                    echo "$endereco_Joao";
                ?>
            </td>
        </tr>




            
    </table>
</body>
</html>