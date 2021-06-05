<?php
/**
 * Created by PhpStorm.
 * User: tujailer
 * Date: 6/5/21
 * Time: 11:00 AM
 */

namespace App\Exceptions;


class EspressoMachineException extends \Exception
{
    function message(){
        return "error : " . $this->getMessage() ;
    }
}