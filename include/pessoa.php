<?php 
class Pessoa {
    private $id; 
    private $nome;
    private $idade;
    private $sexo;

    public function __construct($myfile, $nome, $idade, $sexo)
    {   
        $this->id = $this->getId($myfile);
        $this->nome = $nome;
        $this->idade = $idade;
        $this->sexo = $sexo;

        // Grava os dados da pessoa no arquivo
        fwrite($myfile, "{$this->id};{$this->nome};{$this->idade};{$this->sexo}\n");
    }

    public function __destruct()
    {   
        
    }

    public function getId()
    {
        $myfile = file("dados_pessoa.csv");

        $ultimaLinha = trim(array_pop($myfile));
        $colunas = explode(";", $ultimaLinha);

        if ($colunas[0] == "") {
            $id = 0;
        } else {
            $id = (int)$colunas[0] + 1;
        }

        return $id;
    }
}

?>