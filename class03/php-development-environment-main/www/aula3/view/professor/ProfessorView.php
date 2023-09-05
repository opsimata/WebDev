<?php $professores = $_REQUEST['professores']; ?>

<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Lista de Professores</title>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.1/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-4bw+/aepP/YC94hEpVNVgiZdgIC5+VKNBQNGCHeKRQN+PtmoHDEXuppvnDJzQIu9" crossorigin="anonymous">
</head>

<body>

    <?php require_once $_SERVER['DOCUMENT_ROOT'] . '/' . FOLDER . '/view/navbar.php'; ?>

    <div class="container">

        <div class="row text-center">
            <h2>Semana da Acessibilidade</h2>
        </div>

        <div class="row text-center">
            <img class="rounded" src="https://edrodrigues.com.br/wp-content/uploads/2021/06/como-escrever-um-bom-texto-alt-para-acessibilidade-e-motores-de-busca.jpeg" class="img-fluid" alt="Ilustração contendo a repesentação de uma pessoa deficiente visual a esquerda, ao lado de icones de imagem com um campo html 'alt' ao meio e a direita um esboço de uma página web">
        </div>

        <br>

        <a href="/<?php echo FOLDER; ?>/?controller=Professor&acao=salvar" class="btn btn-dark">Cadastrar Professor</a>

        <br>
        <br>

        <table class="table table-dark">
            <thead>
                <tr>
                    <th scope="col">#</th>
                    <th scope="col">Nome</th>
                    <th scope="col">Idade</th>
                    <th scope="col">Ações</th>
                </tr>
            </thead>
            <tbody>
                <?php foreach ($professores as $professorAtual) { ?>
                    <tr>
                        <td><?php echo $professorAtual['id']; ?></td>
                        <td><?php echo $professorAtual['nome']; ?></td>
                        <td><?php echo $professorAtual['idade']; ?></td>
                        <td>
                            <a href="/<?php echo FOLDER; ?>/?controller=Professor&acao=editar&id=<?php echo $professorAtual['id']; ?>" class="btn btn-secondary">Editar</a>
                            <a href="/<?php echo FOLDER; ?>/?controller=Professor&acao=excluir&id=<?php echo $professorAtual['id']; ?>" class="btn btn-danger">Excluir</a>
                        </td>
                    </tr>
                <?php } ?>
            </tbody>
        </table>
    </div>

</body>

</html>