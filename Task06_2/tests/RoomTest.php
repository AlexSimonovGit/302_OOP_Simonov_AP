<?php
namespace App\Tests;

use App\EconomyRoom;
use App\StandardRoom;
use App\LuxeRoom;
use App\InternetDecorator;
use App\SofaDecorator;
use App\FoodDeliveryDecorator;
use App\BuffetBreakfastDecorator;
use App\DinnerDecorator;
use PHPUnit\Framework\TestCase;

class RoomTest extends TestCase
{
    public function testEconomyRoom()
    {
        $room = new EconomyRoom();
        $this->assertEquals('Эконом', $room->getDescription());
        $this->assertEquals(1000.0, $room->getCost());
    }

    public function testStandardRoomWithInternet()
    {
        $room = new InternetDecorator(new StandardRoom());
        $this->assertEquals('Стандарт, выделенный Интернет', $room->getDescription());
        $this->assertEquals(2100.0, $room->getCost());
    }

    public function testLuxeRoomWithSofaAndDinner()
    {
        $room = new SofaDecorator(new DinnerDecorator(new LuxeRoom()));
        $this->assertEquals('Люкс, ужин, дополнительный диван', $room->getDescription());
        $this->assertEquals(4300.0, $room->getCost());
    }

    public function testEconomyRoomWithAllServices()
    {
        $room = new InternetDecorator(
            new SofaDecorator(
                new FoodDeliveryDecorator(
                    new BuffetBreakfastDecorator(
                        new DinnerDecorator(new EconomyRoom())
                    )
                )
            )
        );
        $this->assertEquals('Эконом, ужин, завтрак "шведский стол", доставка еды в номер, дополнительный диван, выделенный Интернет', $room->getDescription());
        $this->assertEquals(3200.0, $room->getCost());
    }
}