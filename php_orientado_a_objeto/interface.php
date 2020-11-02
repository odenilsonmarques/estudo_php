<?php

interface GerenciadorBD{

    public function listProduto();

    public function addProduto();

    public function alteraProduto();
}

class Mysql implements GerenciadorBD{

    public function listProduto(){
        echo "listando produto mysql";
    }
    public function addProduto(){

    }
    public function alteraProduto(){
        
    }
}

class Oracle implements GerenciadorBD{

    public function listProduto(){
        echo "listando produto Oracle";
    }
    public function addProduto(){

    }
    public function alteraProduto(){
        
    }
}

$exeBD = new Oracle();
$exeBD->listProduto();