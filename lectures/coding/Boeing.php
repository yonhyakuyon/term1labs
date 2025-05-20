<?
require_once "Airplane.php";
class Boeing extends Airplane{
    public $number;
    public $model;
    public function crushing($building){

        
        $this->construct='Unluck';
        $building->hp-=50;


    }



}