<?php

namespace App;

class GildedRose
{
    protected static $lookup = [
        'normal' => Normal::class,
        'Aged Brie' => AgedBrie::class,
        'Backstage passes to a TAFKAL80ETC concert' => Backstage::class,
        'Conjured Mana Cake' => Conjured::class,
    ];

    public static function of($name, $quality, $sellIn)
    {
        $class = static::$lookup[$name] ?? Item::class;
        return new $class($quality, $sellIn);
    }
}
