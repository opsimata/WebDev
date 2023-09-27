<!DOCTYPE html>
<html lang="pt-BR">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Atividade de AP1</title>
    <link rel="stylesheet" href="<?php echo '/' . FOLDER . '/css/style.css'; ?>">
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.1/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-4bw+/aepP/YC94hEpVNVgiZdgIC5+VKNBQNGCHeKRQN+PtmoHDEXuppvnDJzQIu9" crossorigin="anonymous">
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.1/dist/js/bootstrap.bundle.min.js" integrity="sha384-HwwvtgBNo3bZJJLYd8oVXjrBZt8cqVSpeBNS5n7C8IVInixGAoxmnlMuBnhbgrkm" crossorigin="anonymous"></script>
</head>

<body>
    <div class="side-navbar active-nav d-flex justify-content-between flex-wrap flex-column" id="sidebar">
        <ul class="nav flex-column text-white w-100">
            <a href="/<?php echo FOLDER; ?>/" class="nav-link h3 text-white my-2">
                <b>Atividade de AP1</b>
            </a>
            <li href="#" class="nav-link">
                <a class="nav-link active" aria-current="page" href="/<?php echo FOLDER; ?>/"><b>Home</b></a>
            </li>
            <li href="#" class="nav-link">
                <a class="nav-link" href="/<?php echo FOLDER; ?>/?controller=Estudante&acao=listar"><b>Estudantes</b></a>
            </li>
            <li href="#" class="nav-link">
                <a class="nav-link" href="/<?php echo FOLDER; ?>/?controller=Professor&acao=listar"><b>Professores</b></a>
            </li>
        </ul>

        <span href="#" class="nav-link h4 w-100 mb-5">
            <a href=""><i class="bx bxl-instagram-alt text-white"></i></a>
            <a href=""><i class="bx bxl-twitter px-2 text-white"></i></a>
            <a href=""><i class="bx bxl-facebook text-white"></i></a>
        </span>
    </div>

    <div class="p-1 my-container active-cont">

        <nav class="navbar top-navbar px-5">
            <a class="btn border-0" id="menu-btn"><b>Menu</b></a>
        </nav>

        <h1 class="text-dark d-flex justify-content-center">Atividade de AP1</h1>

        <h5 class="text-dark d-flex justify-content-center">Página inicial</h5>

        <p class="text-dark d-flex justify-content-center">Para acessar as outras páginas utilize o menu na parte esquerda da tela!!</p>

        <div class="container d-flex justify-content-center mt-5">
            <img src="https://img.freepik.com/free-vector/developer-activity-concept-illustration_114360-2801.jpg?w=740&t=st=1694564912~exp=1694565512~hmac=69d6961393d010b5fff3d020ed6aa89a762a1a9b476d41151cbd1304db299353">
        </div>

        <div class="container "></div>

    </div>

    <script>
        var menu_btn = document.querySelector("#menu-btn");
        var sidebar = document.querySelector("#sidebar");
        var container = document.querySelector(".my-container");
        menu_btn.addEventListener("click", () => {
            sidebar.classList.toggle("active-nav");
            container.classList.toggle("active-cont");
        });
    </script>
</body>

</html>