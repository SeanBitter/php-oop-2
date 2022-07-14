<?php

require_once __DIR__ . "/Product.php";

class Toys extends Product {
  protected $colour;
  protected $material;
  protected $size;

  function __construct($_name, $_description, $_price, $_colour, $_material, $_size)
  {
    parent::__construct($_name, $_description, $_price);

    $this->setColour($_colour);
    $this->setMaterial($_material);
    $this->setSize($_size);
  }
  
  /**
   * Get the value of colour
   */
  public function getColour()
  {
    return $this->colour;
  }

  /**
   * Set the value of colour
   */
  public function setColour($colour): self
  {
    $this->colour = $colour;

    return $this;
  }

  /**
   * Get the value of material
   */
  public function getMaterial()
  {
    return $this->material;
  }

  /**
   * Set the value of material
   */
  public function setMaterial($material): self
  {
    $this->material = $material;

    return $this;
  }

  /**
   * Get the value of size
   */
  public function getSize()
  {
    return $this->size;
  }

  /**
   * Set the value of size
   */
  public function setSize($size): self
  {
    $this->size = $size;

    return $this;
  }
}

?>