<?php


class UserController
{
  use Response;
  public function index()
  {
    $this->render('user');
  }
}

// ok