<html>

    <head>
        <title>Lista de Compras</title>
    </head>
    <body>

        <?php
            $listaCompras = array('Arroz' => 2, 'Feijão' => 3, 'Café' => 1, 'Macarrão'=> 5, 'Carne'=> 1, 'Temperos'=>10);
        ?>

        <h1>Olá, Bem Vindo a Sua Lista de Supermercado<?php echo $nome; ?></h1>

        <table border=1>
            <tr>
                <th>Item</th>
                <th>Quantidade</th>
            </td>
            
            <?php
                foreach($listaCompras as $item => $quantidade){
                    echo "<tr>";
                    echo "<td>$item</td>";
                    echo "<td>$quantidade</td>";
                }
            ?>
            
        </table>
    </body>
</html>