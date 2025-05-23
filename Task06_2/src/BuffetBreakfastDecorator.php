<?php
namespace App;

class BuffetBreakfastDecorator extends RoomDecorator
{
    public function getDescription(): string
    {
        return $this->room->getDescription() . ', завтрак "шведский стол"';
    }

    public function getCost(): float
    {
        return $this->room->getCost() + 500.0;
    }
}