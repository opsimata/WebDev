<?php

require_once $_SERVER['DOCUMENT_ROOT'] . '/' . FOLDER . '/database/Database.php';

class ProfessorModel
{
    private int $idade;
    private string $nome;
    private $database;

    //Getters and Setters

    public function __construct()
    {
        $this->database = new Database();
    }

    public function listarModel(): array
    {

        // $dadosArray = $this->database->select("SELECT nome FROM estudantes");
        $dadosArray = $this->database->select("SELECT * FROM professores");

        return $dadosArray;

        // var_dump($dadosArray);
        // die;

        // return [
        //     [
        //         "nome" => "Lucas Saraiva"
        //     ],
        //     [
        //         "nome" => "Pedro Lippert"
        //     ]
        // ];
    }

    public function salvarModel(string $nome, int $idade)
    {
        $sql = "INSERT INTO professores (nome, idade) values ('$nome', '$idade')";
        $this->database->insert($sql);
    }
}