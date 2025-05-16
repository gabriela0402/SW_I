<?php
    class Conta {
        public $Nome;
        public $Cpf;
        private $Saldo;
        //usa o this para acessar algo dentro da class
        public function Sacar($valor){
            if($valor>$this->Saldo){
                return "SALDO INSUFICIENTE";
            }else{
                $this->Saldo = $this->Saldo - $valor;
                //$this->Saldo -= $valor;
                $resultado = "Seu saldo atual é de R$". $this->Saldo;
                return $resultado;
            }
        }

        public function Depositar($valor){
            $this->Saldo = $this->Saldo + $valor;
            $resultado = "Seu saldo atual é de R$". $this->Saldo;
            return $resultado;

        }

        public function ConsultarSaldo(){
            echo"NOME:" . $this->Nome . "<br>";
            echo"Cpf:" . $this->Cpf . "<br>";
            echo"Saldo:" . $this->Saldo . "<br>";
        }

    };



?>