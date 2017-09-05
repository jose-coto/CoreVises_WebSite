<?php

/*
 * To change this license header, choose License Headers in Project Properties.
 * To change this template file, choose Tools | Templates
 * and open the template in the editor.
 */

/**
 * Description of Usuario
 *
 * @author allan
 */
class Product {

    private $_id;
    private $name;
    private $description;
    private $code;
    private $category;
    private $price;
    private $inStock;
    private $weight;
    private $urlImage;
    
    public function Product($_id, $name, $description, $code, $category, $price, $inStock, $weight, $urlImage) {
        $this->_id = $_id;
        $this->name = $name;
        $this->description = $description;
        $this->code = $code;
        $this->category = $category;
        $this->price = $price;
        $this->inStock = $inStock;
        $this->weight = $weight;
        $this->urlImage = $urlImage;
    }
    
    function get_id() {
        return $this->_id;
    }

    function getName() {
        return $this->name;
    }

    function getDescription() {
        return $this->description;
    }

    function getCode() {
        return $this->code;
    }

    function getCategory() {
        return $this->category;
    }

    function getPrice() {
        return $this->price;
    }

    function getInStock() {
        return $this->inStock;
    }

    function getWeight() {
        return $this->weight;
    }

    function getUrlImage() {
        return $this->urlImage;
    }

    function set_id($_id) {
        $this->_id = $_id;
    }

    function setName($name) {
        $this->name = $name;
    }

    function setDescription($description) {
        $this->description = $description;
    }

    function setCode($code) {
        $this->code = $code;
    }

    function setCategory($category) {
        $this->category = $category;
    }

    function setPrice($price) {
        $this->price = $price;
    }

    function setInStock($inStock) {
        $this->inStock = $inStock;
    }

    function setWeight($weight) {
        $this->weight = $weight;
    }

    function setUrlImage($urlImage) {
        $this->urlImage = $urlImage;
    }
}
