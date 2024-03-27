<?php

class Student
{
  private $id;
  private $prenom;
  private $nom;
  private $email;
  private $mot_de_passe;

  // Getters

  public function getId()
  {
    return $this->id;
  }

  public function getPrenom()
  {
    return $this->prenom;
  }

  public function getNom()
  {
    return $this->nom;
  }

  public function getEmail()
  {
    return $this->email;
  }

  public function getMotDePasse()
  {
    return $this->mot_de_passe;
  }

  public function setId($id)
  {
    $this->id = $id;
  }

  public function setPrenom($prenom)
  {
    $this->prenom = $prenom;
  }

  public function setNom($nom)
  {
    $this->nom = $nom;
  }

  public function setEmail($email)
  {
    $this->email = $email;
  }

  public function setMotDePasse($mot_de_passe)
  {
    $this->mot_de_passe = $mot_de_passe;
  }
}
