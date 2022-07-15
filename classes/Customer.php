<?php

require_once __DIR__ . "/Cart.php";
require_once __DIR__ . "/PaymentMethod.php";

class Customer {
  protected $name;
  protected $surname;
  public Cart $cart;
  public PaymentMethod $paymentMethod;

  function __construct($_name, $_surname, $_registered, $_type, $_number, $_cvv, $_expDate)
  {
    $this->setName($_name);
    $this->setSurname($_surname); 
    $this->cart = new Cart($_registered);
    $this->paymentMethod = new PaymentMethod($_type, $_number, $_cvv, $_expDate);
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
   * Get the value of surname
   */
  public function getSurname()
  {
    return $this->surname;
  }

  /**
   * Set the value of surname
   */
  public function setSurname($surname): self
  {
    $this->surname = $surname;

    return $this;
  }

}

?>
