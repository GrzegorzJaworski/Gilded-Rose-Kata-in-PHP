<?php
/**
 * Created by PhpStorm.
 * User: Grzesiek
 * Date: 17.09.2018
 * Time: 16:12
 */

namespace App;


class Item
{
    public $quality;

    public $sellIn;

    public function __construct($quality, $sellIn)
    {
        $this->quality = $quality;
        $this->sellIn = $sellIn;
    }

    public function tick(){

    }
}