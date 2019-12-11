<?php
 namespace App\BusinessObjects;

 class Product implements IProduct{
  private $id;
  private $name;
  private $sku;
  private $image;//array of productimage
  private $description;
  private $category;
  private $price;
  private $discount;
  public function getId()
  {
    return $this->id;
  }
  public function setId($id)
  {
    $this->id=$id;
  }
  public function getName()
  {
    return $this->name;
  }
  public function setName($name)
  {
    $this->name=$name;
  }
  public function getSku()
  {
    return $this->sku;
  }
  public function setSku($sku)
  {
    $this->sku=$sku;
  }
   public function getImage()
    {
        return $this->image;
    }
    public function setImage($image)
    {
        $this->image = $image;
    }
    public function getCategory()
    {
        return $this->category;
    }
    public function setCategory($category)
    {
        $this->category = $category;
    }
    public function getDescription()
    {
      return $this->description;
    }
    public function setDescription($description)
    {
      $this->description=$description;
    }
    public function getPrice()
    {
        return $this->price;
    }
    public function setPrice($price)
    {
        $this->price = $price;
    }
    public function getDiscount()
    {
        return $this->discount;
    }
    public function setDiscount($discount)
    {
        $this->discount = $discount;
    }

}
