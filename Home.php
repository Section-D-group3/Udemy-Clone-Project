<?php
class Home extends Controller{

  public function index($id = ''){
    $data['title'] = 'homepage1';
    $data['author'] = 'nasifay';
    $this->view('home', $data);
  }

}