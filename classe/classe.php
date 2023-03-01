<?php 
    class Modelos{
        var $nome;
        var $ano;
        var $marca;

        function __construct($nomeExterno, $anoExterno, $marcaExterno){
            $this->nome = $nomeExterno;
            $this->ano = $anoExterno;
            $this->marca = $marcaExterno;
        }

        function getNome(){
            return $this->nome;
        }

        function setNome($nomeExterno){
            $this->nome = $nomeExterno;
        }

        function getAno(){
            return $this->ano;
        }

        function setAno($anoExterno){
            $this->ano = $anoExterno;
        }

    
        function getMarca(){
            return $this->marca;
        }

        function setMarca($marcaExterno){
            $this->marca = $marcaExterno;
        }


    }
?>