<?php

abstract class Shape
{

    protected $type;
    protected $color;

    public function setType($type){
        $this->type = $type;
    }

    public function getType(){
        return $this->type;
    }

    public function setColor($color){
        $this->color = $color;
    }

    public function getColor(){
        return $this->color;
    }

    abstract function __clone();
}