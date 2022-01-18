<?php

class Book extends Product
{
    private $weight;

    public function __construct($sku, $name, $price, $size, $weight, $height, $width, $length, $type)
    {
        parent::__construct($sku, $name, $price, $type);


        $props = array($weight);
        $this->extra = $this->setExtra($props);

    }

    public function getWeight(){
        return $this->extra['weight'];
    }

    public function setWeight($weight){
        return $this->extra['weight'] = $weight;
    }
    public function setExtra($props)
    {
        $extraProps = array('weight');
        return $this->extra = array_combine($extraProps, $props);
    }

    public function printExtra(){
        foreach($this->extra as $key => $value){
            echo "<h5>" . $key . ": " . $value . "</h5>";

        }
    }

}