<?php
  class Product {
    private $id;
    private $image;
    private $name;
    private $price;

    public function __construct( $id, $name, $price, $image ) {
      $this->id = $id;
      $this->image = $image;
      $this->name = $name;
      $this->price = $price;
    }

    public function getId() {
      return $this->id;
    }

    public function getImage() {
      return $this->image;
    }

    public function getName() {
      return $this->name;
    }

    public function getPrice() {
      return $this->price."yen";
    }
  }
 ?>