<?php

class Volunteer {

  private $name;
  private $firstname;
  private $tel;
  private $email;
  private $dispo;
  private $task;
  private $tsize;
  private $volmsg;

  public function __construct($name, $firstname, $tel, $email, $dispo, $task, $tsize, $volmsg) {
    $this->name = $name;
    $this->firstname = $firstname;
    $this->tel = $tel;
    $this->email = $email;
    $this->dispo = $dispo;
    $this->task = $task;
    $this->tsize = $tsize;
    $this->volmsg = $volmsg;
  }


  public function getName() {
    return $this->name;
  }

  public function getFirstname() {
    return $this->firstname;
  }
  public function getTel() {
    return $this->tel;
  }

  public function getEmail() {
    return $this->email;
  }

  public function getDispo() {
    return $this->dispo;
  }
  public function getTask() {
    return $this->task;
  }

  public function getTsize() {
    return $this->tsize;
  }

  public function getVolmsg() {
    return $this->volmsg;
  }

  public function validate() {

    $errorArray = array();

    //firstname check
    if (empty($this->firstname)) {
      array_push($errorArray, "Il manque ton prénom...");
    }

    //name check
    if (empty($this->name)) {
      array_push($errorArray, "Il manque ton nom...");
    }

    //tel check
    if (empty($this->tel)) {
      array_push($errorArray, "Il manque ton Numéro de téléphone...");
    }

    //email check
    if (empty($this->email)) {
      array_push($errorArray, "Il manque ton e-mail...");
    }

    if (filter_var($this->email, FILTER_VALIDATE_EMAIL) === false) {
      array_push($errorArray, "Vérifies ton e-mail s'il te plaît..." . $this->email . " ");
    }

    return $errorArray;
  }

}

?>