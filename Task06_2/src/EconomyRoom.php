<?php
namespace App;

class EconomyRoom implements RoomInterface
{
    public function getDescription(): string
    {
        return 'Эконом';
    }

    public function getCost(): float
    {
        return 1000.0;
    }
}