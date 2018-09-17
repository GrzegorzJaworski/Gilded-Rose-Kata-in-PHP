<?php
/**
 * Created by PhpStorm.
 * User: Grzesiek
 * Date: 17.09.2018
 * Time: 16:00
 */

namespace App;


class Normal extends Item
{
    public function tick()
    {
        $this->sellIn--;

        if ($this->quality == 0) {
            return;
        }

        $this->quality--;

        if ($this->sellIn <=0) {
            $this->quality--;
        }
    }

}