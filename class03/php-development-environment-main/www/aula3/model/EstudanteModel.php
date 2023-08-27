<?php

class EstudanteModel
{
    private int $idade;
    private string $nome;

    //Getters and Setters

    public function listarModel(): array
    {
        return [
            [
                "nome" => "Lucas Saraiva"
            ],
            [
                "nome" => "Pedro Lippert"
            ]
        ];
    }

    public function salvarModel()
    {
        echo "Estudante salvo com sucesso!";
    }
}
