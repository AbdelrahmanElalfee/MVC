<?php

namespace MVC\core;

use mysqli;

class controller
{
  public function view($path, $params)
  {
    extract($params);
    require_once(VIEWS . '/' . $path . ".php");
  }
}
