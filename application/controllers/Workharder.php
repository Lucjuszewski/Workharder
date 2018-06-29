<?php
defined('BASEPATH') OR exit('No direct script access allowed');
class Workharder extends CI_Controller {
    public function __construct()
        {
                parent::__construct();
                $this->load->helper('url');
                $this->load->helper('form');
                $this->load->helper('security');
                $this->load->helper('date');
                $this->load->model('workharder_m');
        }
    public function index() {
        $this->load->view('workharder_index');
    }
    public function register() {
        $table = $this->input->post();
        if(isset($table['inputPassword1'])) { //If form was sended
            $this->workharder_m->ValidateUsername($table['inputUsername']) ? $u_correct = true : $u_correct = false;  
            $this->workharder_m->ValidateEmail($table['inputEmail']) ? $e_correct = true : $e_correct = false;
            $this->workharder_m->ValidatePassword($table['inputPassword1']) ? $p_correct = true : $p_correct = false;
            $this->workharder_m->ValidateCheckbox($table['regulaminCheck']) ? $chb_correct = true : $chb_correct = false; 
            if($p_correct) {
                if($table['inputPassword1']==$table['inputPassword2']) {
                    $p2_correct = true;
                    $data['p2_correct'] = $p2_correct;
                } else {$p2_correct = false;
                        $data['p2_correct'] = $p2_correct;}
            }
            $data['u_correct'] = $u_correct;
            $data['e_correct'] = $e_correct;
            $data['p_correct'] = $p_correct;
            $data['chb_correct'] = $chb_correct;
            $sekret = "6Lf2UVsUAAAAAPPfCwlZXa2-tpHz0f4sPeLCAMoS";
            $check = file_get_contents('https://www.google.com/recaptcha/api/siteverify?secret='.$sekret.'&response='.$table['g-recaptcha-response']);
            $response = json_decode($check);
         
        if ($response->success==false)
        {
            $recaptcha_correct = false;
            $data['recaptcha_correct'] = $recaptcha_correct;
        } else {
          $recaptcha_correct = true;
            $data['recaptcha_correct'] = $recaptcha_correct;  
        }
            if($u_correct&&$e_correct&&$p_correct&&$recaptcha_correct) {
                $now = time();
                $date = unix_to_human($now, TRUE, 'eu');
                $hash= hash('sha256',$table['inputPassword1']);
                $salt1 = 'jxAk1uUZRR5fa4q9aogd351B2aLH7Xk6kbp0c6dKz243qUenOkAU';
                $salt2 = 'mjd02oh0RIi83eph16d1ekSxiusj8Al6Llc7dng4a1jmofn74hba';
                $password = $salt1 . $hash . $salt2;
                $this->workharder_m->SaveInDB($table['inputUsername'],$table['inputEmail'],$password,$date);
                $isRegister = true;
                $data['isRegister'] = $isRegister;
            }
        } //End of work if form was sended
        @$this->load->view('workharder_register',$data);
    }
}