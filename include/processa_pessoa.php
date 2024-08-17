<?php
//Arquivo responsável por processar as informações do formulário HTML

require 'pessoa.php';

//Acessa ou cria um arquivo caso não exista com os dados da classe Pessoa
$myfile = fopen("dados_pessoa.csv", "a+");

//Ao criar o arquivo ele inicia com as colunas
if(fgets($myfile) == "")
{
    fwrite($myfile,"id;nome;idade;sexo\n");
}

fclose($myfile);

if ($_SERVER["REQUEST_METHOD"] == "POST") {
    //Recebe os dados do formulário
    $nome = $_POST['nome'];
    $idade = $_POST['idade'];
    $sexo = $_POST['sexo'];

    //Verifica os dados
    if (!empty($nome) && is_numeric($idade) && $idade < 125 && $idade > 1 && ($sexo === 'M' || $sexo === 'F')) {
        $myfile = fopen("dados_pessoa.csv", "a+");

        $pessoa = new Pessoa($myfile, $nome, $idade, $sexo);

        fclose($myfile);

        echo '<p>Dados cadastrados com sucesso!</p>';
    } else {
        echo '<p>Dados inválidos!</p>';
    }
}
?>
