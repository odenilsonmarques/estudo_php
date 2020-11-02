<?php
require_once 'models/Usuario.php';

//esta classes devem implementar os metodo da interface UsuarioDao implementado junto da classe Usuario
class UsuarioDaoMysql implements UsuarioDao{
    //recebendo pdo atraves de injeção de dependencia
    private $pdo;

    public function __construct(PDO $driver){
        $this->pdo = $driver;
    }

    public function add(Usuario $usuario){
        //o add recebe um usuario e faz uma adição no bd
        $sql = $this->pdo->prepare("INSERT INTO usuario (nome, email) VALUES (:nome, :email)");
        $sql->bindValue(':nome', $usuario->getNome());
        $sql->bindValue(':email', $usuario->getEmail());
        $sql->execute();

        //pegando e adicionando id ao objeto que foi inserido
        $usuario->setId($this->pdo->lastInsertId());
        return $usuario;
    }
    public function list(){
        $array = [];
        $sql = $this->pdo->query("SELECT * FROM usuario");
        if($sql->rowCount()>0){
            $dados = $sql->fetchAll();

            //foi criado o foreach para criar e preencher um objeto
            foreach($dados as $item){
                $user = new Usuario();
                $user->setId($item['id']);
                $user->setNome($item['nome']);
                $user->setEmail($item['email']);
                //passando o objeto $user para dentro do array
                $array []= $user;
            }
        }
        return $array;
    }
    public function findEmail($email){
        $sql = $this->pdo->prepare("SELECT * FROM usuario WHERE email = :email");
        $sql->bindValue(':email', $email);
        $sql->execute();
        if($sql->rowCount()>0){
            //se foi encontrado um registro é retornado um objeto
            $dados = $sql->fetch();
            //montando o pbjeto
            $user = new Usuario();
            $user->setId($dados['id']);
            $user->setNome($dados['nome']);
            $user->setEmail($dados['email']);
            return $user;
        }else{
            return false;
        }
    }

    public function findId($id){
        $sql = $this->pdo->prepare("SELECT * FROM usuario WHERE id = :id");
        $sql->bindValue(':id', $id);
        $sql->execute();
        if($sql->rowCount()>0){
            //se foi encontrado um registro é retornado um objeto
            $dados = $sql->fetch();
            //montando o pbjeto
            $user = new Usuario();
            $user->setId($dados['id']);
            $user->setNome($dados['nome']);
            $user->setEmail($dados['email']);
            return $user;
        }else{
            return false;
        }
    }
    public function update(Usuario $usuario){
        $sql = $this->pdo->prepare("UPDATE usuario SET nome = :nome, email = :email WHERE id = :id");
        $sql->bindValue(':nome',$usuario->getNome());
        $sql->bindValue(':email',$usuario->getEmail());
        $sql->bindValue(':id',$usuario->getId());
        $sql->execute();
        return true;
    }
    public function delete($id){
        $sql = $this->pdo->prepare("DELETE FROM usuario WHERE id = :id");
        $sql->bindValue(':id',$id);
        $sql->execute();
    }
}