<?php

require_once __DIR__ . "/Product.php";

class Customer {
  protected $name;
  protected $email;
  protected bool $registered;

  function __construct($_name, $_email, $_registered)
  {
    $this->setName($_name);
    $this->setEmail($_email);
    $this->setRegistered($_registered);
  }

  /**
   * Get the value of name
   */
  public function getName()
  {
    return $this->name;
  }

  /**
   * Set the value of name
   */
  public function setName($name): self
  {
    $this->name = $name;

    return $this;
  }

  /**
   * Get the value of email
   */
  public function getEmail()
  {
    return $this->email;
  }

  /**
   * Set the value of email
   */
  public function setEmail($email): self
  {
    $this->email = $email;

    return $this;
  }

  /**
   * Get the value of registered
   */
  public function isRegistered(): bool
  {
    return $this->registered;
  }

  /**
   * Set the value of registered
   */
  public function setRegistered(bool $registered): self
  {
    $this->registered = $registered;

    return $this;
  }
}

?>
