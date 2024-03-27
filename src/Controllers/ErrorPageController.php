<?php


class ErrorPageController
{
  use Response;
  public function index()
  {
    $this->render('404');
  }
}

//ok