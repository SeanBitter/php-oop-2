<?php

class Product {
  protected $name;
  protected $description;
  protected int $price;

  function __construct($_name, $_description, $_price)
  {
    $this->setName($_name);
    $this->setDescription($_description);
    $this->setPrice($_price);
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
   * Get the value of description
   */
  public function getDescription()
  {
    return $this->description;
  }

  /**
   * Set the value of description
   */
  public function setDescription($description): self
  {
    $this->description = $description;

    return $this;
  }

  /**
   * Get the value of price
   */
  public function getPrice()
  {
    return $this->price;
  }

  /**
   * Set the value of price
   */
  public function setPrice($price): self
  {
    $this->price = $price;

    return $this;
  }
}

?>