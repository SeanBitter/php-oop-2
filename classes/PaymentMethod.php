<?php

require_once __DIR__ . "/../traits/Validator.php";

class PaymentMethod {

  Use Validator;

  private $paymentMethods = [];
  private $type;
  private int $number;
  private int $cvv;
  private $expDate;


  function __construct($_type, $_number, $_cvv, $_expDate) 
  {
    $this->setType($_type);
    $this->setType($_number);
    $this->setType($_cvv);
    $this->setType($_expDate);
  }

  public function addPaymentMethod($_paymentMethod)
  {
    $this->paymentMethods[] = $_paymentMethod;
  }

  /**
   * Get the value of paymentMethods
   */
  public function getPaymentMethods()
  {
    return $this->paymentMethods;
  }

  public function getMethod($index)
  {
    return $this->getPaymentMethods()[$index];
  }

  /**
   * Get the value of type
   */
  public function getType()
  {
    return $this->type;
  }

  /**
   * Set the value of type
   */
  public function setType($type): self
  {
    $this->type = $type;

    return $this;
  }

  /**
   * Get the value of number
   */
  public function getNumber()
  {
    return $this->number;
  }

  /**
   * Set the value of number
   */
  public function setNumber($number): self
  {
    $this->number = $number;

    return $this;
  }

  /**
   * Get the value of cvv
   */
  public function getCvv()
  {
    return $this->cvv;
  }

  /**
   * Set the value of cvv
   */
  public function setCvv($cvv): self
  {
    $this->cvv = $cvv;

    return $this;
  }

  /**
   * Get the value of expDate
   */
  public function getExpDate()
  {
    return $this->expDate;
  }

  /**
   * Set the value of expDate
   */
  public function setExpDate($expDate): self
  {
    $this->validateDate($expDate);
    $this->expDate = $expDate;

    return $this;
  }

  public function validateCard() {
    $expiration = DateTime::createFromFormat("m/y", $this->expDate);
    $now = new DateTime("now");

    return $expiration > $now;
  }
}

?>