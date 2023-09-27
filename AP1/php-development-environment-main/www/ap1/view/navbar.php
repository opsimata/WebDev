<nav class="navbar navbar-expand-lg bg-body-tertiary bg-dark" data-bs-theme="dark">
    <div class="container-fluid">
        <a class="navbar-brand" href="#">Atividade de AP1</a>
        <button class="navbar-toggler" type="button" data-bs-toggle="collapse" data-bs-target="#navbarScroll" aria-controls="navbarScroll" aria-expanded="true" aria-label="Toggle navigation">
            <span class="navbar-toggler-icon"></span>
        </button>
        <div class="collapse navbar-collapse" id="navbarScroll">
            <ul class="navbar-nav me-auto my-2 my-lg-0 navbar-nav-scroll" style="--bs-scroll-height: 100px;">
                <li class="nav-item">
                    <a class="nav-link active" aria-current="page" href="/<?php echo FOLDER; ?>/">Home</a>
                </li>
                <li class="nav-item">
                    <a class="nav-link" href="/<?php echo FOLDER; ?>/?controller=Estudante&acao=listar">Estudantes</a>
                </li>
                <li class="nav-item">
                    <a class="nav-link" href="/<?php echo FOLDER; ?>/?controller=Professor&acao=listar">Professores</a>
                </li>
            </ul>
            <form class="d-flex" role="search">
                <input class="form-control me-2" type="search" placeholder="Buscar" aria-label="Search">
                <button class="btn btn-secondary" type="submit">Buscar</button>
            </form>
        </div>
    </div>
</nav>

