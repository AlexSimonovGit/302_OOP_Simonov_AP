<?php
namespace App;

class LuxeRoom implements RoomInterface
{
    public function getDescription(): string
    {
        return 'Люкс';
    }

    public function getCost(): float
    {
        return 3000.0;
    }
}