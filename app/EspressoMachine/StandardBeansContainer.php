<?php
/**
 * Created by PhpStorm.
 * User: tujailer
 * Date: 6/5/21
 * Time: 11:30 AM
 */

namespace App\EspressoMachine;


use App\Exceptions\ContainerFullException;

class StandardBeansContainer implements BeansContainer
{
    private $currentBeansVolume = 0;

    private $spoonVolumeUsed = 0;


    public $size;

    public function __construct(int $size = 50)
    {
        $this->size = $size;
    }

    public function addBeans($numSpoons){

        $volumeNeeded = $this->size - $this->currentBeansVolume;
        if($volumeNeeded > 0){
            if($numSpoons <= $volumeNeeded){
                $newVolume = $this->currentBeansVolume + $numSpoons;
                $this->spoonVolumeUsed = $numSpoons;

            }else{
                $newVolume = $this->currentBeansVolume + $volumeNeeded;
                $this->spoonVolumeUsed = $volumeNeeded;
            }
            $this->currentBeansVolume = $newVolume;
        }else{
            throw new ContainerFullException("Container is full.");
        }

    }

    public function useBeans($numSpoons): int
    {
        // TODO: Implement useBeans() method.
        return $this->spoonVolumeUsed;
    }


    public function getBeans(): int
    {
        // TODO: Implement getBeans() method.
        return $this->currentBeansVolume;
    }


}