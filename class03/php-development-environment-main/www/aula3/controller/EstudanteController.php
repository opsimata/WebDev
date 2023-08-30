<?php

require_once $_SERVER['DOCUMENT_ROOT'] . '/' . FOLDER . '/model/EstudanteModel.php';

class EstudanteController
{
    const CONTROLLER_FOLDER = '/estudante';

    public function listar()
    {
        $estudanteModel = new EstudanteModel();
        $estudantes = $estudanteModel->listarModel();
        $_REQUEST['estudantes'] = $estudantes;

        //Render na View
        require_once $_SERVER['DOCUMENT_ROOT'] . '/' . FOLDER . '/view' . self::CONTROLLER_FOLDER . '/EstudanteView.php';
    }

    public function salvar()
    {
        if ($_SERVER['REQUEST_METHOD'] == 'GET') {
            require_once $_SERVER['DOCUMENT_ROOT'] . '/' . FOLDER . '/view' . self::CONTROLLER_FOLDER . '/EstudanteForm.php';
        } elseif ($_SERVER['REQUEST_METHOD'] == 'POST') {
            $nome = $_POST['nome'];
            $idade = $_POST['idade'];

            $estudanteModel = new EstudanteModel();
            $estudanteModel->salvarModel($nome, $idade);

            header('Location: http://localhost:8081/' . FOLDER . '/?controller=Estudante&acao=listar');
            exit();
        }
    }
}
