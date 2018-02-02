<?php
namespace app\Services\Business;

use App\Models\UserModel;
use App\Services\Data\SecurityDAO;
use Exception;
use PDO;
use PDOException;
use Illuminate\Database\Connection;

class SecurityService
{
    public function login(UserModel $user){
        
     
        
        try{
            $hostname = config("database.connections.mysql.host");
            $username = config("database.connections.mysql.username");
            $password = config("database.connections.mysql.password");
            $dbname = config("database.connections.mysql.database");
          
            
           $conn = new PDO("mysql:host=$hostname;dbname=$dbname", $username, $password);
           $conn->setAttribute(PDO::ATTR_ERRMODE, PDO::ERRMODE_EXCEPTION);
            
            
           $service = new SecurityDAO($conn);
           return $service->findByUser($user);
           
        
        }
        
        catch(PDOException $e)
        {
            throw new Exception("Database Exception: " . $e->getMessage(), 1);
        }
    }
}

