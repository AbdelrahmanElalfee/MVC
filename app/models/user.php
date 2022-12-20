<?php

namespace MVC\models;

use MVC\core\model;
use mysqli;

class user extends model
{
  public function GetAllUsers()
  {
    $sql = "SELECT * FROM `users`";
    $res = mysqli_query(model::db(), $sql);
    return $res;
  }

  public function GetUserData($mail, $password)
  {
    $sql = "SELECT * FROM `users` WHERE `mail` = '$mail' AND `password` = '$password'";
    $res = mysqli_fetch_assoc(mysqli_query(model::db(), $sql));
    return $res;
  }
}
