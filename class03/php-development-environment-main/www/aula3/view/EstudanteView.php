<?php $estudantes = $_REQUEST['estudantes']; ?>

<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Lista de Estudantes</title>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.1/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-4bw+/aepP/YC94hEpVNVgiZdgIC5+VKNBQNGCHeKRQN+PtmoHDEXuppvnDJzQIu9" crossorigin="anonymous">
</head>

<body>
    <div class="container">

        <div class="row text-center">
            <h2>Semana da Acessibilidade</h2>
        </div>

        <div class="row text-center">
            <img class="rounded" src="https://edrodrigues.com.br/wp-content/uploads/2021/06/como-escrever-um-bom-texto-alt-para-acessibilidade-e-motores-de-busca.jpeg" class="img-fluid" alt="Ilustração contendo a repesentação de uma pessoa deficiente visual a esquerda, ao lado de icones de imagem com um campo html 'alt' ao meio e a direita um esboço de uma página web">
        </div>

        <br>

        <a href="/aula3/?controller=Estudante&acao=salvar" class="btn btn-dark">Cadastrar Estudante</a>

        <br>
        <br>

        <table class="table table-dark">
            <thead>
                <tr>
                    <th scope="col">#</th>
                    <th scope="col">Nome</th>
                    <th scope="col">Idade</th>
                </tr>
            </thead>
            <tbody>
                <?php foreach ($estudantes as $estudanteAtual) { ?>
                    <tr>
                        <td><?php echo $estudanteAtual['id']; ?></td>
                        <td><?php echo $estudanteAtual['nome']; ?></td>
                        <td><?php echo $estudanteAtual['idade']; ?></td>
                    </tr>
                <?php } ?>
            </tbody>
        </table>
    </div>

</body>

</html>