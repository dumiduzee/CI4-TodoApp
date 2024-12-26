<?php
namespace App\Models;
use CodeIgniter\Model;
use Config\Database;
use Config\Services;
use PSpell\Config;

class LoginModel extends Model{

    public $db;
    public function __construct(){
        $this->db = Database::connect();
    }

    public function UserLogin(array $userdata) {
        try {
            $builder = $this->db->table('users');
            $query = $builder->getWhere($userdata);
            $result = $query->getRowArray();
            
            if ($result) {
                return true;
            } else {
                return false;
            }
        } catch (\Exception $e) {
            return false;
        }
    }
    
}