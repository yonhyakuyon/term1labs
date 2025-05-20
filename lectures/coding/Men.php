<?php
require_once "Man.php";
class Men extends Man
{
    public function __construct()
    {



    }
    public int $happy=0;
    public static $inventBeer=0;
    public function eating()
    {
        // TODO: Implement eating() method.
    }
    public function relax(){
        $this->happy+=50;
    }
    public static function inventBeer(){
        self::$inventBeer=1;
}
}