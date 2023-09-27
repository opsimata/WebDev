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
        <h3>Cadastrando novo estudante:</h3>
        <form method="POST" action="/<?php echo FOLDER; ?>/?controller=Estudante&acao=salvar">
            <div class="mb-3">
                <label for="nome" class="form-label"><b>Nome</b></label>
                <input type="text" placeholder="Nome do estudante" class="form-control" id="nome" name="nome">
            </div>
            <div class="mb-3">
                <label for="idade" class="form-label"><b>Idade</b></label>
                <input type="number" placeholder="Idade do estudante" class="form-control" id="idade" name="idade">
            </div>
            <button type="submit" class="btn btn-dark">Salvar</button>
        </form>
    </div>
</body>

</html>