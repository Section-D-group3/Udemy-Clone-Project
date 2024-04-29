<?php
class App{

  function __construct(){
    print_r($_GET); // this helps us to get any url query and manage the that propery
  }


}

$app = new App();