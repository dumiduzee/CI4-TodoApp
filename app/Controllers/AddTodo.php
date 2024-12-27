<?php
namespace App\Controllers;
use CodeIgniter\Controller;
use App\Models\TodoOpeModel;

class AddTodo extends Controller{

    public $todoModel;

    public function __construct()
    {
        $this->todoModel = new TodoOpeModel();
    }
    public function addTodoItem(){
        if($this->request->is("post")){
            $todo_data = [
                "email"=>$this->request->getVar("email",FILTER_SANITIZE_EMAIL),
                "todo"=>$this->request->getVar("todoitem",FILTER_SANITIZE_STRING)
            ];
            $result = $this->todoModel->addNewTodo($todo_data);
            if($result > 0){
                return redirect("dashboard");
            }
        }else{
            return redirect("dashboard");

            
        }
    }

    public function deleteTodo($id){
        if($id){
            $this->todoModel->deleteTodo(["id"=>$id]);
        }
        return redirect('dashboard');
    }

    
}