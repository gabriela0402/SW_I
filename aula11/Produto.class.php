<?php
    class Produto {
        private $Nome;
        private $Preco;
        private $Quantidade;

        public function __construct($nome, $preco , $quantidade){
            $this -> Nome = $nome;
            $this -> Preco = $preco;
            $this -> Quantidade = $quantidade;
        }

        public function getNome(){
            return $this->Nome;
        }

        public function setNome(){
            $this->Nome;
        }

        public function getPreco(){
            return $this->Preco ;
        }

        public function setPreco(){
            $this->Preco;
        }

        public function adicionarEstoque($qtd){
            if($qtd>0){
                $this->Quantidade += $qtd;
            }else{
                echo"O valor inserido deve ser maior que 0.<br>";
            }
            
        }

        public function removerEstoque($qtd){
            if ($qtd>0 && $qtd <= $this->Quantidade){
                $this-> Quantidade -= $qtd;
            } else{
                echo"Valor invalido.<br>";
            }
            
        }

        public function mostrarDetalhes(){
            echo"Nome: {$this->Nome} <br>";
            echo"Preço: {$this->Preco} <br>";
            echo"Quantidade: {$this->Quantidade}";
        }
    }







?>