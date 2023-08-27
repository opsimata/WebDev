<?php

require_once $_SERVER['DOCUMENT_ROOT'] . '/aula3/model/EstudanteModel.php';

class EstudanteController
{
    public function listar()
    {
        $estudanteModel = new EstudanteModel();
        $estudantes = $estudanteModel->listarModel();
        $_REQUEST['estudantes'] = $estudantes;

        //Render na View
        require_once $_SERVER['DOCUMENT_ROOT'] . '/aula3/view/EstudanteView.php';
    }
}
