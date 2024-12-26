<?php
namespace App\Models;

use CodeIgniter\Database\MySQLi\Builder;
use CodeIgniter\Model;
class SignupModel extends Model{

    public $conn;
    public function __construct(){
        $this->conn = \Config\Database::connect();
        
    }
    public function addSignupData(array $validated_data){
        $builder = $this->conn->table('users');
        $result = $builder->insert($validated_data);
        return $result;
        
    }

    public function isUserExists(string $email){
        $builder = $this->conn->table("users");
        $query = $builder->getWhere(["email"=>$email]);
        $result = $query->getRowArray();
        if($result == 0){
            return true;
        }else{
            return false;
        }
        

    }

}