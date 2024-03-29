<?php

class UserController
{
  use Response;

  //mettre les actions du crud ici ↓
  public function connexion()
  {
    $this->render('user');
  }
}
