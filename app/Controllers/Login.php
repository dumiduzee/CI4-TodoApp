<?php

namespace App\Controllers;
use CodeIgniter\Controller;
use App\Models\LoginModel;

class Login extends Controller{

    public $session;


    public function __construct(){
        helper(["form","password","validatefield"]);
        $this->session = session();


    }
    public function index(){

        $data = [];
        $data['valiated_error'] = null;
        if($this->request->is('post')){
            $validate_data = [
                "email"=>[
                    "rules"=>"required|valid_email",
                    "errors"=>[
                        "required"=>"all fields are required",
                        "valid_email"=>"valid email required"
                    ]
                    ],
                "password"=>[
                    "rules"=>"required",
                    "errors"=>[
                        "required"=>"all fields are required"
                    ]
                    ]
                ];
            if (!$this->validate($validate_data)) {
                $data['valiated_error'] = $this->validator->getErrors();
                return view('login',$data);
            }else{
                $validated_fields = [
                    "email"=>$this->request->getVar('email',FILTER_SANITIZE_EMAIL),
                    "password"=>hash_password($this->request->getVar("password",FILTER_SANITIZE_STRING))
                ];
                $login_model = new LoginModel();
                $login_model_result = $login_model->UserLogin($validated_fields);
                if($login_model_result){
                    return redirect("dashboard");
                }else{
                    $this->session->setTempdata("login_error","User credentials not found please register ",3);
                    return redirect('login');
                }
                
                
            }
        }
        echo view('login',$data);

    }
}
