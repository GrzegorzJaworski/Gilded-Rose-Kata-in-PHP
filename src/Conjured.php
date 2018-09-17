<?php
/**
 * Created by PhpStorm.
 * User: Grzesiek
 * Date: 17.09.2018
 * Time: 16:17
 */

namespace App;


class Conjured extends Item
{

    public function tick()
    {
        $this->sellIn--;

        if ($this->quality == 0){
            return;
        }

        $this->quality-=2;

        if ($this->sellIn <= 0) {
            $this->quality-=2;
        }
    }
}