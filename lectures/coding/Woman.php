<?php
require_once "Man.php";
require_once "Work.php";
require_once "NailPaintingInterface.php";
class Woman extends Man implements NailPaintingInterface
{
    use Work;
    // TODO: Implement paintiong() method.
    public function paintiong()
    {
        // TODO: Implement paintiong() method.
    }
};

