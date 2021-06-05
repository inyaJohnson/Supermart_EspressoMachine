<?php
/**
 * Created by PhpStorm.
 * User: tujailer
 * Date: 6/5/21
 * Time: 11:03 AM
 */

namespace App\Exceptions;


class ContainerFullException extends  EspressoMachineException
{
    function message(){
        return "error : " . $this->getMessage() ;
    }
}