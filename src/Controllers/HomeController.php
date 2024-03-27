<?php


class HomeController
{
  use Response;
  public function index()
  {
    $this->render('vols');
  }
}

//ok