<?php
namespace App;

class StandardRoom implements RoomInterface
{
    public function getDescription(): string
    {
        return 'Стандарт';
    }

    public function getCost(): float
    {
        return 2000.0;
    }
}