<?php


function show($stuff){
  echo "<pre>";
  print_r($stuff);
  echo "</pre>";
}

class App{
  protected $controller = '_404';
  protected $method = 'index';

  function __construct(){
    $arr = $this->getURL(); // this helps us to get any url query and manage that propery
    $filename = "../app/controllers/".ucfirst($arr[0]).".php";

    if(file_exists($filename)){
      require $filename;
      $this->controller = ucfirst($arr[0]);
      unset($arr[0]);

    }else{
      require "../app/controllers/".$this->controller.".php";
    }

    $mycontroller = new $this->controller();
    $mymethod = $arr[1] ?? $this->method;

    if(!empty($arr[1])){
      if(method_exists($mycontroller,strtolower($mymethod))){
        $this->method = strtolower($mymethod);
        unset($arr[1]);
      }
    }
    
    $arr = array_values($arr);
    call_user_func_array([$mycontroller,$this->method],$arr);
  }

  private function getURL(){
    $url = $_GET['url'] ?? 'home';
    $url = filter_var($url, FILTER_SANITIZE_URL);
    $urlArr = explode('/',$url);
    return $urlArr;
  }

}

$app = new App();

