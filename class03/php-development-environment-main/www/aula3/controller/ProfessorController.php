<?php

require_once $_SERVER['DOCUMENT_ROOT'] . '/' . FOLDER . '/model/ProfessorModel.php';

class ProfessorController
{
    const CONTROLLER_FOLDER = '/professor';

    public function listar()
    {
        $professorModel = new ProfessorModel();
        $professores = $professorModel->listarModel();
        $_REQUEST['professores'] = $professores;

        //Render na View
        require_once $_SERVER['DOCUMENT_ROOT'] . '/' . FOLDER . '/view' . self::CONTROLLER_FOLDER . '/ProfessorView.php';
    }

    public function salvar()
    {
        if ($_SERVER['REQUEST_METHOD'] == 'GET') {
            require_once $_SERVER['DOCUMENT_ROOT'] . '/' . FOLDER . '/view' . self::CONTROLLER_FOLDER . '/ProfessorForm.php';
        } elseif ($_SERVER['REQUEST_METHOD'] == 'POST') {
            $nome = $_POST['nome'];
            $idade = $_POST['idade'];

            $professorModel = new ProfessorModel();
            $professorModel->salvarModel($nome, $idade);

            header('Location: http://localhost:8081/' . FOLDER . '/?controller=Professor&acao=listar');
            exit();
        }
    }
}
