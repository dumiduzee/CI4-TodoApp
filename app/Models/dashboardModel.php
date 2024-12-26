<?php
namespace App\Models;

use CodeIgniter\Database\MySQLi\Builder;
use CodeIgniter\Model;

class DashboardModel extends Model{
    public $db;

    public function __construct(){
        $this->db = \Config\Database::connect();
    }

    public function ValidateUser(string $useremail){
        $builder = $this->db->table("users");
        $query = $builder->getWhere(["email"=>$useremail]);
        $result = $query->getRowArray();
        return $result; 
    }

    public function creteDummyTodo(string $useremail){
        
        $builder = $this->db->table("todo");
        //check if todo exists or not
        if($builder->getWhere(["email"=>$useremail])->getNumRows() == 0){
        $builder->insert(["email"=>$useremail,"todo"=>"This is sample todo"]);
        }
    }

    public function getAllTodo(string $useremail){
        $builder = $this->db->table("todo");
        $query = $builder->getWhere(["email"=>$useremail]);
        if($query->getNumRows() > 0){
            return $query->getResult();
        }else{
            return null;
        }


    }

}