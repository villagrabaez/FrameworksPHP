<?php

namespace App\Http;

class Request
{
  protected $arguments = [];
  protected $controller;
  protected $method;

  public function __construct()
  {
    $this->arguments = explode('/', $_SERVER['REQUEST_URI']);

    // var_dump($this->arguments);

    $this->setController();
    $this->setMethod();
  }

  public function setController()
  {
    $this->controller = empty($this->arguments[1]) ? 'home' : $this->arguments[1];

    // var_dump($this->controller);
  }

  public function setMethod()
  {
    $this->method = empty($this->arguments[2]) ? 'index' : $this->arguments[2];

    // var_dump($this->method);
  }

  public function getController()
  {
    $controller = ucfirst($this->controller);

    return "App\Http\Controllers\\{$controller}Controller";
  }

  public function getMethod()
  {
    return $this->method;
  }

  public function send()
  {
    $controller = $this->getController();
    $method = $this->getMethod();

    $response = call_user_func([
      new $controller,
      $method,
    ]);

    try {
      if ($response instanceof Response) {
        $response->send();
      } else {
        throw new \Exception("Error Processing Request");
      }
    } catch(\Exception $e) {
      echo "Details {$e->getMessage()}";
    }
  }
}