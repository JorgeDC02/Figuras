<?php

/**
 * Created by PhpStorm.
 * User: Jordi
 * Date: 30/09/2015
 * Time: 15:40
 */
namespace Figura;

class Punto
{
  private $x; 
  private $y;

    //En PHP solo puede haver un constructor
    function __construct($X, $Y)
    {
        $this->x = $X;
        $this->y = $Y;
    }

    /**
     * @param $X
     * @return mixed
     * ------------------------------Setters y getters
     */
    function setX($X){
        $this->x=$X;
    }
    function getX(){
        return $this->x;
    }

    /**
     * @return mixed
     */
    public function getY()
    {
        return $this->y;
    }
    /**
     * @param mixed $y
     */
    public function setY($y)
    {
        $this->y = $y;
    }


    function desplazar($dx, $dy){
        $this->x=$this->x+$dx;
        $this->y=$this->y+$dy;
    }

    function distancia(Punto $P){
        $dx=$this->x-$P->getX();
        $dy=$this->y-$P->getY();
    }

	
    function __toString(){
        return "X=".$this->x.", Y=".$this->y;
    }
}