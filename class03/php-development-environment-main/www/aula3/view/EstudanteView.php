<?php $estudantes = $_REQUEST['estudantes']; ?>

<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Lista de estudantes</title>
</head>

<body>
    <table>
        <?php foreach($estudantes as $estudanteAtual){ ?>
        <tr>
            <td>Nome:</td>
            <td><?php echo $estudanteAtual['nome']; ?></td>
        </tr>
        <?php } ?>
    </table>
</body>

</html>