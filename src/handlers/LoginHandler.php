<?php

namespace src\handlers;

use \src\models\User;

class LoginHandler
{
  public static function checkLogin()
  {
    if (!empty($_SESSION['token'])) {
      $token = $_SESSION['token'];

      $data = User::select()->whre('token', $token)->execute();
      if (count($data) > 0) {
        $loggedUser =  new User();
        $loggedUser->id = $data['id'];
        $loggedUser->email = $data['id'];
        $loggedUser->name = $data['id'];
        // $loggedUser->setId($data['id']);
        // $loggedUser->setEmail($data['email']);
        // $loggedUser->setEmail($data['name']);

        return $loggedUser;
      }
    }

    return false;
  }
}
