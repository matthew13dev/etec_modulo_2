<?php
class Login
{

    private $email;
    private $password;

    public function __construct($email,$password)
    {
        $this->email = $email;
        $this->password = $password;
    }
    public function validation() {
        global $pdo;

        $sql = "SELECT * FROM login where email = :email AND pass = :password";
        $stmt = $pdo->prepare($sql);
        $stmt->bindValue(":email", $this->email);
        $stmt->bindValue(":password", $this->password);
        $stmt->execute();

        if($stmt->rowCount() > 0){
            $list = $stmt->fetch(PDO::FETCH_ASSOC);

            session_start();
            $_SESSION['id'] = $list['id'];
            $_SESSION['email'] = $list['email'];
            $_SESSION['password'] = $list['pass'];
            return true;
        }
        else{
            return false;
        }
    }
}
