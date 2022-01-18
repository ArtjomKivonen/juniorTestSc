<?php

class ProductDetector
{
    private $detectors = [
        'DVD' => 'DVD',
        'Book' => 'Book',
        'Furniture' => 'Furniture',
    ];

    public function getClass($type){
        return $this->detectors[$type];
    }
}
