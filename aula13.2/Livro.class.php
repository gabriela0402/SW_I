<?php
    class Livro{
        private $Titulo;
        private $Autor;
        private $Disponivel;

        public function __construct($titulo,$autor,$disponivel){
            $this->Titulo = $titulo;
            $this->Autor = $autor;
            $this->Disponivel = $disponivel;
        }

        public function getTitulo(){
            return $this->Titulo;
        }

        public function getDisponivel(){
            return $this->Disponivel;
        }

        public function Emprestar(){
            if ($this->getDisponivel() == true){
                $this->Disponivel = false;
            }else{
                echo"<br> O livro solicitado não está disponível no momento.";
            }
        }

        public function Devolver(){
            $this->Disponivel = true;
            echo "<br>Obrigada! Livro devolvido.";
        }

        public function exibirStatus(){
            $titulo_livro = $this->getTitulo();
            if($this->getDisponivel() == true){
                $status_livro = "Disponível";
            }else{
                $status_livro = "Emprestado";
            }
            
            $resposta = "O livro ".$titulo_livro." está ".$status_livro; 
            return $resposta;
            //com o título e o status ('Disponivel' ou 'Emprestado')
        }
    }



?>