<?php

require_once __DIR__ . "/Product.php";

class Food extends Product {
  protected $ingredients;
  protected $exprirationDate;
  protected $kcal;

  /**
   * Get the value of ingredients
   */
  public function getIngredients()
  {
    return $this->ingredients;
  }

  /**
   * Set the value of ingredients
   */
  public function setIngredients($ingredients): self
  {
    $this->ingredients = $ingredients;

    return $this;
  }

  /**
   * Get the value of exprirationDate
   */
  public function getExprirationDate()
  {
    return $this->exprirationDate;
  }

  /**
   * Set the value of exprirationDate
   */
  public function setExprirationDate($exprirationDate): self
  {
    $this->exprirationDate = $exprirationDate;

    return $this;
  }

  /**
   * Get the value of kcal
   */
  public function getKcal()
  {
    return $this->kcal;
  }

  /**
   * Set the value of kcal
   */
  public function setKcal($kcal): self
  {
    $this->kcal = $kcal;

    return $this;
  }
}

?>