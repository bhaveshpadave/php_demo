<?php

class Product {
    public $id;
    public $name;
    public $price;
    public $color;

    public function setColor ($color) {
        return $this->color = $color;
    }
}