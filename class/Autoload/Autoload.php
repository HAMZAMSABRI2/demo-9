<?php




class Autoload {

    private $color ;


    public function __construct($color)
    {
        $this->color = $color;
    }


    public function getColor() {
        return $this->color;
    }

    public function setColor($color) {
        return $this->color = $color;
    }
}


