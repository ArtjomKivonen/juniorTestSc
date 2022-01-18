<?php

abstract class Product
{

    //object props
    private $sku;
    private $name;
    private $price;
    private $type;


    public function __construct($sku, $name, $price, $type)
    {
        $this->sku = $sku;
        $this->name = $name;
        $this->price = $price;
        $this->type = $type;

//        $props = array($size, $weight, $height, $width, $length);
//        $this->extra = $this->setExtra($props);

    }


    public function getSku()
    {
        return $this->sku;
    }
    public function getName()
    {
        return $this->name;
    }
    public function getPrice()
    {
        return $this->price;
    }
    public function getExtra()
    {
        return $this->extra;
    }

    public function setSku($sku)
    {
        $this->sku = $sku;
    }
    public function setName($name)
    {
        $this->name = $name;
    }
    public function setPrice($price)
    {
        $this->price = $price;
    }
    public function getType()
    {
        return $this->type;
    }
    public function setType($type)
    {
        $this->type = $type;
    }

//    public function setExtra($props)
//    {
//        $i=0;
//        $extra = array('size'=>null, 'weight'=>null, 'height'=>null, 'width'=>null, 'length'=>null);
//        foreach ($extra as $key => $value){
//            if($props[$i]!==null){
//                $extra[$value] = $props[$i];
//            }
//            $i++;
//        }
//        $this->extra = $extra;
//    }
//
//    public function printExtra(){
//        foreach($this->extra as $key => $value){
//            if($this->extra[$value]!=null) {
//                echo "<h5>" . $key . ": " . $value . "</h5>";
//            }
//        }
//    }


    public function toJson()
    {
        $obj = new stdClass();
        $obj->sku = $this->sku;
        $obj->name = $this->name;
        $obj->price = $this->price;

        return $obj;
    }



}