<?php

class PaymentMethod {
  private $type;
  private $number;
  private $cvv;
  private $expDate;

  function __construct($_type, $_number, $_cvv, $_expDate) 
  {
    $this->setType($_type);
    $this->setType($_number);
    $this->setType($_cvv);
    $this->setType($_expDate);
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
    $this->expDate = $expDate;

    return $this;
  }
}

?>