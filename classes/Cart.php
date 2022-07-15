<?php

class Cart {
  public $products = [];
  public bool $registered;

  function __construct($_registered) 
  {
    $this->setRegistered($_registered);
  }

  public function addProduct($product) {
    $this->products[] = $product;
  }

  public function removeProduct($product) {
    $this->products[] = $product;
  }

  /**
   * Get the value of newCart
   */
  public function getProducts()
  {
    return $this->products;
  }

  /**
   * Set the value of products
   */
  public function setProducts($products): self
  {
    $this->products = $products;

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

  public function getTotal() {
    $total = 0;

    foreach($this->products as $product) {
      $total += $product->getPrice();
    }

    if($this->isRegistered() === true) {
      return $total * 0.8;
    } else {
      return $total;
    }
  }
}

?>