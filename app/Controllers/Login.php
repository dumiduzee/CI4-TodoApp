<?php

namespace App\Controllers;
use CodeIgniter\Controller;
use App\Models\LoginModel;

class Login extends Controller{


    public function __construct(){
        helper(["form","password"]);

    }
    public function index(){

        $data = [];
        if($this->request->is('post')){
            $validate_data = [
                "email"=>[
                    "rules"=>"required",
                    "errors"=>[
                        "required"=>"all fields are required"
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
                echo "validate erros";
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
                    echo "ssame";
                }else{
                    echo "not";
                }
                
                
            }
        }
        echo view('login');

    }
}
