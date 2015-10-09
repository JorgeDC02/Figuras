<?php
/**
 * Created by PhpStorm.
 * User: Jordi
 * Date: 06/10/2015
 * Time: 19:04
 */

namespace Figura;

require_once('Figura.php');
require_once('Punto.php');
class Cuadrado extends Figura
{
    protected $ancho;

    //Constructor de la clase
    function __construct(Punto $origen,$an){
        parent::__construct($origen);
        $this->ancho=$an;
    }

    //metodos de la clase
    public function Area(){
        return $this->ancho*2;
    }

    public  function Perimetro(){
        return $this->ancho*4;;
    }

    public function Escalar($porc){
        $this->ancho=$this->ancho*$porc;
    }

    public function __toString(){
        return "Se ha creado figura".$this->getNumFiguras()." de tipo Cuadrado: ".parent::__toString().
        ", Ancho=".$this->ancho;
    }
}