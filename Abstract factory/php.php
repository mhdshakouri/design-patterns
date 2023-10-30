<?php
interface vehicle
{
    public function name();
}
class ElectronicCar implements vehicle
{
    public function name()
    {
        return 'Electronic Car';
    }
}
class ElectronicTruck implements vehicle
{
    public function name()
    {
        return 'Electronic Truck';
    }
}
class GasolineCar implements vehicle
{
    public function name()
    {
        return 'Gasoline Car';
    }
}
class GasolineTruck implements vehicle
{
    public function name()
    {
        return 'Gasoline Truck';
    }
}

interface ElectronicVehicleFactoryInterface
{
    public function createElectronicCar();
    public function createElectronicTruck();
}

interface GasolineVehicleFactoryInterface
{
    public function createGasolineCar();
    public function createGasolineTruck();
}

class ElectronicVehicleFactory implements ElectronicVehicleFactoryInterface
{
}
