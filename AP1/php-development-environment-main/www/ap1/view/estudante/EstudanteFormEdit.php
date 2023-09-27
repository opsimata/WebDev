<?php
$estudante = $_REQUEST['estudante'];
?>

<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Cadastro de Estudantes</title>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.1/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-4bw+/aepP/YC94hEpVNVgiZdgIC5+VKNBQNGCHeKRQN+PtmoHDEXuppvnDJzQIu9" crossorigin="anonymous">
</head>

<body>

    <?php require_once $_SERVER['DOCUMENT_ROOT'] . '/' . FOLDER . '/view/navbar.php'; ?>

    <div class="container">
        <br>
        <h3>Editando cadastro de estudante</h3>
        <h5>Cadastro atual: <?php echo $estudante["id"]; ?> -  <?php echo $estudante["nome"]; ?>, <?php echo $estudante["idade"]; ?> anos.</h5>
        <form method="POST" action="/<?php echo FOLDER; ?>/?controller=Estudante&acao=editar&id=<?php echo $estudante["id"]; ?>">
            <!-- <div class="mb-3">
                <label for="nome" class="form-label">ID</label>
                <input type="text" class="form-control" id="id" name="id" value="<?php echo $estudante["id"]; ?>">
            </div> -->
            <div class="mb-3">
                <label for="nome" class="form-label"><b>Nome</b></label>
                <input type="text" class="form-control" id="nome" name="nome" value="<?php echo $estudante["nome"]; ?>">
            </div>
            <div class="mb-3">
                <label for="idade" class="form-label"><b>Idade</b></label>
                <input type="number" class="form-control" id="idade" name="idade" value="<?php echo $estudante["idade"]; ?>">
            </div>
            <button type="submit" class="btn btn-dark">Salvar alteração</button>
        </form>
    </div>
</body>

</html>