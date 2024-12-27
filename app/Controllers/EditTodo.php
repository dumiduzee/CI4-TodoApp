<?php
namespace App\Controllers;
use CodeIgniter\Controller;
use App\Models\TodoOpeModel;

class EditTodo extends Controller{
    public function edittodoitem(){
        $data = [];
        if($this->request->is("post")){
            $data = $this->request->getPost();
        }
        return view("editpage",$data);
    }

    public function editItem(){
        $validations = [];
        $validations["errors"] = null;
        if($this->request->is("post")){
            $rules = [
                "todo"=>[
                    "rules"=>"required",
                    "errors"=>[
                        "required"=>"This field is required"
                    ]
                ]
                ];
            if(!$this->validate($rules)){
                $validations["errors"] = $this->validator->getErrors();
                print_r($validations);
                // return redirect('dashboard/edittodo');
                

            }else{
                return redirect("dashboard");
            }
        }
        $todo_id = $this->request->getVar("todoid");
        $todo_item = $this->request->getVar("todoitem");
        $model = new TodoOpeModel();
        $model->editTodo($todo_id,$todo_item); 
        //editmodel here add 
        // return redirect("dashboard");
        

    }
}
