<?php
class Signup extends Controller{

  public function index($id = ''){

    $user = new User();
    $result = $user->validate($_POST);

    var_dump($result);
    show($_POST);
    $data['title'] = 'data';
    $this->view('signup', $data);
  }

}