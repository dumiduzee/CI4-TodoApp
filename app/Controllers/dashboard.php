<?php
namespace App\Controllers;
use CodeIgniter\Controller;

class Dashboard extends Controller{

    public $session;

    public function __construct(){
        $this->session = session();
    }

    public function index(){
        
        return view("user/dashboard");
    }
}