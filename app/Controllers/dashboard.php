<?php
namespace App\Controllers;
use CodeIgniter\Controller;
use App\Models\DashboardModel;

class Dashboard extends Controller{

    public $session;
    public $dbmodel;

    public function __construct(){
        $this->session = session();
        $this->dbmodel = new DashboardModel();
    }

    public function index(){
        if($this->dbmodel->ValidateUser($this->session->getTempdata("email"))){
            $this->dbmodel->creteDummyTodo($this->session->getTempdata("email"));

        }else{
            $this->session->setTempdata("login_error","invalid login method",3);
            return redirect("login");
        }


        return view("user/dashboard");
    }
}