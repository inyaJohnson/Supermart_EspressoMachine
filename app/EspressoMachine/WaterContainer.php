<?php
/**
 * Created by PhpStorm.
 * User: tujailer
 * Date: 6/5/21
 * Time: 12:22 PM
 */

namespace App\EspressoMachine;


interface WaterContainer
{
    public function addWater(float $litres);

    public function useWater(float $litres):int;

    public function getWater():int;
}