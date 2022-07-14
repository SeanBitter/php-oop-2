<?php

require_once __DIR__ . "/Product.php";

class Beds extends Product {
  protected $type;
  protected $length;

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
   * Get the value of length
   */
  public function getLength()
  {
    return $this->length;
  }

  /**
   * Set the value of length
   */
  public function setLength($length): self
  {
    $this->length = $length;

    return $this;
  }
}

?>