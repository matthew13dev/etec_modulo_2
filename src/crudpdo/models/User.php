<?php


class User
{
    private $pdo;

    public function __construct($host, $dbname, $user, $pass)
    {
        try {
            // Conexão correta com PDO
            $this->pdo = new PDO("mysql:host=" . $host . ";dbname=" . $dbname, $user, $pass);
            $this->pdo->setAttribute(PDO::ATTR_ERRMODE, PDO::ERRMODE_EXCEPTION);

        } catch (PDOException $err) {
            echo "Erro de Conexão: " . $err->getMessage();
        } catch (Exception $generico) {
            echo "Erro genérico: " . $generico->getMessage();
        }
    }


    public function selectAll()
    {
        $list = array();

        $sql = "SELECT * FROM user ORDER BY nome ASC";

        $cmd = $this->pdo->prepare($sql);
        $cmd->execute();

        $list = $cmd->fetchAll(PDO::FETCH_ASSOC);

        return $list;
    }


    public function insertUser($nome, $telefone, $email)
    {
        $sql = "SELECT ID from user where email = :email;";

        $comand = $this->pdo->prepare($sql);
        $comand->bindValue(":email", $email);
        $comand->execute();


        if ($comand->execute()) {

            if ($comand->rowCount() > 0) {
                return false;
            } else {

                $sql = "INSERT INTO user(nome,telefone,email) VALUES(:nome,:telefone,:email);";

                $comand = $this->pdo->prepare($sql);
                $comand->bindValue(":nome", $nome);
                $comand->bindValue(":telefone", $telefone);
                $comand->bindValue(":email", $email);
                $comand->execute();

                return true;
            }
        } else {
            
            echo "Erro ao inserir usuário: " . $comand->errorInfo()[2];
            return false;
        }
    }


    public function deleteUser($id){
        $sql = "DELETE from user where ID = :id";
        $cmd = $this->pdo->prepare($sql);
        $cmd->bindValue(":id", $id);
        $cmd->execute();
    }
}
