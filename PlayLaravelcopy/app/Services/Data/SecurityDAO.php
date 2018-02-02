<?php
namespace App\Services\Data;

use \PDO;
use App\Models\UserModel;
use Exception;
use PDOException;
use Illuminate\Database\Connection;
use PhpParser\Node\Stmt\Else_;

class SecurityDAO
{
    
    private $conn = NULL;
    
    public function __construct($conn)
    {
        $this->conn = $conn;    
    }
    
    public function findByUser(UserModel $user)
    {
        try{
            
            $name = $user->getUsername();
            $pw = $user -> getPassword();
            $sth = $this->conn->prepare('SELECT ID, USERNAME, PASSWORD FROM users WHERE BINARY USERNAME = :username AND BINARY PASSWORD = :password');
            $sth->bindparam(':username', $name);
            $sth->bindparam(':password', $pw);
            $sth->execute();
            
            $row = $sth->setFetchMode();
            
            $_SESSION["USER_ID"] = $row["ID"];
            
            if($sth->rowCount()== 1)
                return true;
            else
                return false;
            
        }
        catch(\PDOException $e)
        {
            throw new Exception("Database Exception: " . $e->getMessage(), $e);
        }
    }
}

