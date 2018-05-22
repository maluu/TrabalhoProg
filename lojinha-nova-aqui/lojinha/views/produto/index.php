<html>
    <head>
        <title> Lista de produtos</title>

    </head>
    <body>
            <h1> Lista de categorias</h1>
        <table>
            <thead>
                <tr>
                    <th>Nome</th>
                    <th>Descricao</th>

                </tr>
            </thead>
            <tbody>
            <?php
            foreach ($produtos as $produto):
            ?>
                <tr>
                    <td><?= $produto->getNome(); ?></td>
                    <td><?= $produto->getDescricao(); ?></td>

                </tr>
            <?php
            endforeach;
            ?>
            </tbody>
        </table>
    </body>
</html>