<?php
/**
 * Created by PhpStorm.
 * User: tujailer
 * Date: 6/5/21
 * Time: 12:24 PM
 */

namespace App\EspressoMachine;


use App\Exceptions\ContainerFullException;

class StandardWaterContainer implements WaterContainer
{
    private $currentWaterVolume = 0;

    private $litresUsed = 0;

    public $size;

    public function __construct(int $size = 2)
    {
        $this->size = $size;
    }

    public function addWater(float $litres){
        $volumeNeeded = $this->size - $this->currentWaterVolume;
        if($volumeNeeded > 0){
            if($litres <= $volumeNeeded){
                $newVolume = $this->currentWaterVolume + $litres;
                $this->litresUsed = $litres;

            }else{
                $newVolume = $this->currentWaterVolume + $volumeNeeded;
                $this->litresUsed = $volumeNeeded;
            }
            $this->currentWaterVolume = $newVolume;
        }else{
            throw new ContainerFullException("Container is full.");
        }
    }

    public function useWater(float $litres): int
    {
        // TODO: Implement useBeans() method.
        return (int) $this->litresUsed;
    }


    public function getWater(): int
    {
        // TODO: Implement getBeans() method.
        return $this->currentWaterVolume;
    }



}