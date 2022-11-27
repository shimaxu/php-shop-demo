<?php
require_once __DIR__ . '/Database.php';

class User 
{
    private $pdo;
    public $email;
    public $password;

    public function __construct()
    {
        $db = new Database();
        $this->pdo = $db->connect();
    }

    public function register() {
        $user = $this->findUser('email', $this->email);

        if($user) {
            return false;
        }

        // create user
        return $this->createUser();
    }

    public function createUser() {
        // hash password
        $hash_password = $this->securePassword($this->password);

        $query = 'INSERT INTO `users` (`email`, `password`)
        VALUES(:email, :password)';

        $values = [
            ':email' => $this->email,
            ':password' => $hash_password,
        ];
        
        $stmt = $this->pdo->prepare($query);
        return $stmt->execute($values);
    }

    public function findUser($column, $value) {
        $query = 'SELECT * FROM `users` WHERE `' . $column . '` =:value';
        
        $values = [
        ':value' => $value
        ];

        $stmt = $this->pdo->prepare($query);
        $stmt->execute($values);
        return $stmt->fetch();
    }

    public function securePassword($password) {
        return password_hash($password, PASSWORD_DEFAULT);
    }
}