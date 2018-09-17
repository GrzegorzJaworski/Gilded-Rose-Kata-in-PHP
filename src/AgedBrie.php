<?php
/**
 * Created by PhpStorm.
 * User: Grzesiek
 * Date: 17.09.2018
 * Time: 16:03
 */

namespace App;


class AgedBrie extends Item
{
    public function tick()
    {
        $this->sellIn--;
        if ($this->quality >= 50) {
            return;
        }

        $this->quality++;

        if ($this->sellIn <=0 && $this->quality < 50) {
            $this->quality++;
        }
    }
}