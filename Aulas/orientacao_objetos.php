<?php
//criação da classe aluno
  class Aluno {
   //atributos da classe
   public $nome;
   public $ra;
   public $endereco;
   
   //construtor da classe
   function Aluno(){
     $this->DadosAluno();
  }
   function DadosAluno(){
    $this->nome = "Neandher";
    $this->ra = "40129091587";
    $this->endereco = "Avenida Luiz Gonzaga do Amaral 292";
  }
}
  $aluno = new Aluno();
     echo "Nome: " . $aluno->nome;
     echo "<br>";
     echo "RA: " . $aluno->ra;
     echo "<br>";
     echo "Endereço: " . $aluno->endereco;
?>