<?php

namespace MVC\core;

class app
{
  private $controller = 'home';
  private $method = 'index';
  private $params = [];

  public function __construct()
  {
    $this->parseURL();
    $this->render();
  }

  private function parseURL()
  {
    if (!empty($_SERVER['QUERY_STRING'])) {
      // assign the url to array by explode function
      $url = explode("/", $_SERVER['QUERY_STRING']);
      // controller
      $this->controller = isset($url[0]) ? $url[0] . "controller" : "homecontroller";
      // method
      $this->method = isset($url[1]) ? $url[1] : "index";
      // removing index of 0, 1 from url array
      unset($url[0], $url[1]);
      // parameters
      $this->params = array_values($url);
    } else {
      $this->controller = "homecontroller";
      $this->method = "index";
    }
  }

  private function render()
  {
    $controller = "MVC\controllers\\" . $this->controller;
    if (class_exists($controller)) {
      $controller = new $controller;
      if (method_exists($controller, $this->method)) {
        call_user_func_array([$controller, $this->method], $this->params);
      } else {
        echo "Class Not Exists";
      }
    } else {
      echo "Method Not Exists";
    }
  }
}
