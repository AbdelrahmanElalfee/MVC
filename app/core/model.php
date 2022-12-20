<?php

namespace MVC\core;

class model
{
  public static function db()
  {
    $connect = mysqli_connect(SERVER, USERNAME, PASSWORD, DB_NAME);
    return $connect;
  }
}
