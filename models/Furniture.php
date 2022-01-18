<?php

class Furniture extends Product
{
//    private $height;
//    private $width;
//    private $length;

    public function __construct($sku, $name, $price, $size, $weight, $height, $width, $length, $type)
    {
        parent::__construct($sku, $name, $price, $type);

        $props = array($height, $width, $length);
        $this->extra = $this->setExtra($props);


    }

    public function getHeight(){
        return $this->extra['height'];
    }
    public function setHeight($size){
        return $this->extra['height'] = $size;
    }
    public function getWidth(){
        return $this->extra['width'];
    }
    public function setWidth($width){
        return $this->extra['width'] = $width;
    }
    public function getLength(){
        return $this->extra['length'];
    }
    public function setLength($length){
        return $this->extra['length'] = $length;
    }
    public function setExtra($props)
    {
        $extraProps = array('height', 'width', 'length');
        return $this->extra = array_combine($extraProps, $props);
    }

    public function printExtra(){
        foreach($this->extra as $key => $value){
             echo "<h5>" . $key . ": " . $value . "</h5>";
        }
    }

//    public function propsFromDB($extra){
//        $props = explode(",", $extra);
//        $assocArr = array('height'=>$props[0], 'width'=>$props[1], 'length'=>$props[2]);
//        return $assocArr;
//    }
//    public function printExtra(){
//        foreach($this->extra as $key => $value){
//            echo "<h5>".$key.": ".$value."</h5>";
//        }
//    }



}