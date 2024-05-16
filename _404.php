<?php
class _404 extends Controller{
  public function index(){
    $data['title'] = 'Page not found';
    $this->view('_404', $data);
  }
}