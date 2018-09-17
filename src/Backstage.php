<?php
/**
 * Created by PhpStorm.
 * User: Grzesiek
 * Date: 17.09.2018
 * Time: 16:05
 */

namespace App;


class Backstage extends Item
{
    public function tick()
    {
        $this->sellIn--;

        if ($this->sellIn < 0) {
            $this->quality = 0;
            return;
        }

        if ($this->quality >= 50) {
            return;
        }

        $this->quality++;

        if ($this->sellIn < 10) {
            $this->quality++;
        }

        if ($this->sellIn < 5) {
            $this->quality++;
        }
    }
}