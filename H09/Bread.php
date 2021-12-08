<?php

class Bread {
    private $flour;
    private $shape;
    private $weight;
    private $image_url;

    function __construct($flour, $shape, $weight, $image_url) {
        $this->flour = $flour;
        $this->shape = $shape;
        $this->weight = $weight;
        $this->image_url = $image_url;
    }

    // Setters

    public function setFlour($flour) {
        $this->flour = $flour;
    }

    public function setShape($shape) {
        $this->shape = $shape;
    }

    public function setWeight($weight) {
        $this->weight = $weight;
    }

    public function setImg_url($image_url) {
        $this->image_url = $image_url;
    }

    // Getters

    public function getFlour() {
        return $this->flour;
    }

    public function getShape() {
        return $this->shape;
    }

    public function getWeight() {
        return $this->weight;
    }

    public function getImg_url() {
        return $this->image_url;
    }
}