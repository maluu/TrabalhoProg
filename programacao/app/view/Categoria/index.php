<!doctype html>
<html lang="pt-br">
<head>
    <meta charset="UTF-8">
    <meta name="viewport"
          content="width=device-width, user-scalable=no, initial-scale=1.0, maximum-scale=1.0, minimum-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Lista de Categorias</title>
</head>
<body>

<a href="">incluir nova categoria...</a>
    <h1>Lista categorias</h1>

    <table>
        <?php foreach ($categorias as $categoria):?>

        <tr>
            <td><a href="?action=show&id=<?=$categoria-> getId();?>"><?= $categoria->getNome()?></a></td>
            <td><?= $categoria->getDescricao()?></td>
            <td>

            </td>
        </tr>
        <?php endforeach; ?>

    </table>

</body>
</html>