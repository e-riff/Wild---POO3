<?php
require_once "./HighWay.php";

final class MotoWay extends HighWay
{
    public function __construct(int $nbLane = 4, int $maxSpeed = 130)
    {
        parent::__construct($nbLane, $maxSpeed);
    }

    public function addVehicule(Vehicle $vehicle): array
    {
        if (!($vehicle instanceof Bike) && !($vehicle instanceof skateboard)) {
            $this->currentVehicles[] = $vehicle;
        }
        return $currentVehicles;
    }
}
