<?php
//classe utilizada sempre que for manipular algum usuario
class Usuario{
    private $id;
    private $nome;
    private $email;

    public function getId(){
        return $this->id;
    }
    public function setId($id){
        $this->id = trim($id);
    }

    public function getNome(){
        return $this->nome;
    }
    public function setNome($nome){
        $this->nome = trim(ucwords($nome));
    }

    public function getEmail(){
        return $this->email;
    }
    public function setEmail($email){
        $this->email = strtolower(trim($email));
    }
}

interface UsuarioDao{
    //metodo para add um usuario
    public function add(Usuario $usuario);
    //metodo para exibir os usuarios
    public function list();
    //metodo para encontar um email
    public function findEmail($email);
    //metodo para encontrar um id refente a um usuario
    public function findId($id);
    //metodo para atualizar
    public function update(Usuario $usuario);
    //metodo para deletar
    public function delete($id_usuario);
}