<?php
class Login extends Controller{

  public function index($id = ''){
    $data['title'] = 'login';
    $this->view('login', $data);
  }

}