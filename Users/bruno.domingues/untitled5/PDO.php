<?php

class Pessoa
{
    public $nome;
    public $idade;

    function Algo()
    {
        echo "Algo";
    }
}

$pessoa = new Pessoa();
$pessoaD = new Pessoa();

$pessoaD->nome = 'Pedro';
$pessoaD->idade = '28';

$pessoa->nome = 'Bruno';
$pessoa->idade = '19';

var_dump($pessoa);
var_dump($pessoaD);