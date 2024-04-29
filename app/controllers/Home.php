<?php
class Home{

  public function index($id = ''){
    echo "Home Page view $id";
  }
  public function edit(){
    echo "Home Editting view";
  }
  public function delete($id = ''){
    echo "Home Deleting $id";
  }
  public function setting(){
    echo "Home Setting view";
  }
}