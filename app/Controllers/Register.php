<?php
namespace App\Controllers;
use CodeIgniter\Controller;
use App\Models\SignupModel;
class Register extends Controller{

    public $addSignuModel;
    public $sessionvar;

    public function __construct(){
        helper(['form','password','validatefield']);
        $this->addSignuModel = new SignupModel();
        $this->sessionvar = session(); 
    }
    public function index(){

        $data_to_frontend =[];
        $data_to_frontend['signup_error'] =null;

        $validate_fields = [
            "name"=>[
                "rules"=>'required|max_length[20]|min_length[3]',
                "errors"=>[
                    "required"=>"username field required",
                    "max_length"=>"max length must be 20 characters",
                    "min_length"=>"atlease 3 characters required"
                ]
            ],
            "email"=>[
                "rules"=>'required|valid_email',
                "errors"=>[
                    "required"=>"This field required",
                    "valid_email"=>"Valid email required"
                ]
            ],
            "password"=>[
                "rules"=>"required|min_length[10]",
                "errors"=>[
                    "required"=>"Password field required",
                    "min_length"=>"atleast 10 characters required"

                ]
                ],
            "cpassword"=>[
                "rules"=>"required|min_length[10]|matches[password]",
                "errors"=>[
                    "required"=>"Password field required",
                    "min_length"=>"atleast 10 characters required",
                    "matches"=>"Passwords are not same"

                ]
            ]
        ];
        if($this->request->is('post')){
            if(!$this->validate($validate_fields)){
                $data_to_frontend['signup_error'] = $this->validator->getErrors();
                return view('register',$data_to_frontend);
            }else{
                //check user exists

                print_r($this->addSignuModel->isUserExists($this->request->getVar('email',FILTER_SANITIZE_EMAIL)));


                if($this->addSignuModel->isUserExists($this->request->getVar('email',FILTER_SANITIZE_EMAIL))){
                    $validated_fields = [
                        "name"=>$this->request->getVar('name',FILTER_SANITIZE_STRING),
                        "email"=>$this->request->getVar('email',FILTER_SANITIZE_EMAIL),
                        "password"=>hash_password($this->request->getVar('password',FILTER_SANITIZE_STRING)),
                    ];
                    $signup_result = $this->addSignuModel->addSignupData($validated_fields);
                    if($signup_result){
                        $this->sessionvar->setTempdata('success',"Account created success login here",5);
                        return redirect('login');
                    }
                }else{
                    print_r($this->addSignuModel->isUserExists($this->request->getVar('email',FILTER_SANITIZE_EMAIL)));
                    $this->sessionvar->setTempdata("signup_error","User exists with that email",3);
                    return redirect('register');
                }
                


                
            }
        }
        return view('register',$data_to_frontend);
    }
}