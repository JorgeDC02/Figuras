<?php
/**
 * Created by PhpStorm.
 * User: Jordi
 * Date: 06/10/2015
 * Time: 15:47
 */

namespace Figura;
require_once 'Punto.php';
require_once 'Figura.php';

class Circulo extends Figura
{
    private $radio;

    /**
     * @return mixed
     */
    public function getRadio()
    {
        return $this->radio;
    }

    /**
     * @param mixed $radio
     */
    public function setRadio($radio)
    {
        $this->radio = $radio;
    }

    //Constructor de la clase
    public function __construct(Punto $origen, $r){
     parent::__construct($origen);
    $this->radio=$r;
    }

    //metodos de la clase
    public function Area(){
        return 3.1415*pow($this->radio,2);
    }

    public  function Perimetro(){
        return 2*3.1415*$this->radio;
    }

    public function Escalar($porc){
        $this->radio=$this->radio*$porc;
    }

    public function __toString(){
        return "Se ha creado figura ".$this->getNumFiguras()." de tipo circulo: ".parent::__toString().
            ", radio= ".$this->radio." ";
    }
}