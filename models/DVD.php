<?php

class DVD extends Product
{
    private $size;

    public function __construct($sku, $name, $price, $size, $weight, $height, $width, $length, $type)
    {
        parent::__construct($sku, $name, $price, $type);
        $this->sku = $sku;
        $this->name = $name;
        $this->price = $price;
        $this->size = $size;
        $this->type = $type;

        $props = array($size);
        $this->extra = $this->setExtra($props);

    }

    public function getSize(){
        return $this->extra['size'];
    }

    public function setSize($size){
        return $this->extra['size'] = $size;
    }
    public function propsFromDB($extra){
        $props = explode(",", $extra);
        $assocArr = array('size'=>$props[0]);
        return $assocArr;
    }
    public function setExtra($props)
    {
        $extraProps = array('size');
        return $this->extra = array_combine($extraProps, $props);
    }

    public function printExtra(){
        foreach($this->extra as $key => $value){
            echo "<h5>" . $key . ": " . $value . "</h5>";
        }
    }
//    public function printExtra(){
//        foreach($this->extra as $key => $value){
//            echo "<h5>".$key.": ".$value."</h5>";
//        }
//    }


}