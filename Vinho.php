<?php

class Vinho {
    
    private $nome;
    private $tipo;
    private $preco;
    private $safra;

    public function setNome($nome){
        $this -> nome = $nome;
    }

    public function getNome(){
        return $this -> nome;
    }

    public function setTipo($tipo){
        $this -> tipo = $tipo;
    }

    public function getTipo(){
        return $this -> tipo;
    }

    public function setPreco($preco){
        $this -> preco = $preco;
    }

    public function getPreco(){
        return $this -> preco;
    }

    public function setSafra($safra){
        $this -> safra = $safra;
    }

    public function getSafra(){
        return $this -> safra;
    }

    public function mostrarVinho() {
        return "Nome: " . $this->nome . ", Tipo: " . $this->tipo . ", Safra: " . $this->safra . ", Preço: " . $this->preco; 
    }

    public function verificarPreco($preco) {
        if ($preco < 25) {
            return "Produto em Oferta";
        } else {
            return "Produto com o preço normal!";
        }
    }
}
