<?php
/**
 * Created by PhpStorm.
 * User: tujailer
 * Date: 6/5/21
 * Time: 11:32 AM
 */

namespace App\EspressoMachine;


interface BeansContainer
{
    public function addBeans($numSpoons);

    public function useBeans($numSpoons):int;

    public function getBeans():int;

}