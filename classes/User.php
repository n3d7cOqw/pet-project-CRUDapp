<?php 

require_once __DIR__ . "/../config/db.php";
class User{
    public $pdo;

    public function connect(){
        try{
        $this->pdo = new PDO('mysql:host='.DB_HOST.';dbname=' . DB_NAME, DB_USER, DB_PASSWORD);
        return true;
        }catch (PDOException $e){
            return $e->getMessage();
        }
    }
    public function getListUsers():array{
        $sql = ("SELECT * FROM users");
        $stnt = $this->pdo->prepare($sql);
        $stnt->execute();
        return $stnt->fetchAll(PDO::FETCH_ASSOC);
    }

    public function getUser($id){
        $sql = ("SELECT * FROM users where id=:id");
        $stnt = $this->pdo->prepare($sql);
        $stnt->execute(["id" => $id]);
        return $stnt->fetch(PDO::FETCH_ASSOC);
    }
    public function addUser(string $name, string $email):void{
        $sql = "INSERT INTO users(name, email) VALUES (:name, :email)";
        $stnt = $this->pdo->prepare($sql);
        $stnt->execute([
            "name" => $name,
            "email" => $email,
        ]);
    }

    public function deleteUser(int $id):void{
        $sql = "DELETE FROM users WHERE id=:id";
        $stnt= $this->pdo->prepare($sql);
        $stnt->execute(["id" => $id]);
    }

    public function editUser($id, string $name, string $email):void{
        $data = $this->getUser($id);
        if($email == "") $email = $data["email"];
        if($name == "") $name = $data["name"];
        $sql = "UPDATE `users` SET `name`=:name,email=:email WHERE id=:id";
        $stnt = $this->pdo->prepare($sql);
        $stnt->execute([
            "name" => $name,
            "email" => $email,
            "id" => $id,
        ]);
    }
}
$users = new User();
$users->connect();