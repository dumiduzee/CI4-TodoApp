<?php
namespace App\Models;
use CodeIgniter\Model;

class TodoOpeModel extends Model{

    public $db;
    public $builder_;

    public function __construct()
    {
        $this->db = \Config\Database::connect();
        $this->builder_ = $this->db->table("todo");
    }
    public function addNewTodo(array $usertododata){
        $result = $this->builder_->insert($usertododata);
        return $result;
    }

    public function deleteTodo(array $data){
        $this->builder_->delete($data);
    }

    public function editTodo($id,$todo_data){
        
        
    }
}