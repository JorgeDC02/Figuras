<?php
/**
 * Created by PhpStorm.
 * User: Jordi
 * Date: 08/10/2015
 * Time: 19:02
 */

namespace Figura;
require_once 'Punto.php';
require_once 'Figura.php';
require_once 'Cuadrado.php';

class Rectangulo extends Cuadrado
{
    private $alto;

    /**
     * @return mixed
     */
    public function getAlto()
    {
        return $this->alto;
    }

    /**
     * @param mixed $alto
     */
    public function setAlto($alto)
    {
        $this->alto = $alto;
    }

    //constructor de la clase
    public function __construct(Punto $origen, $an, $alt){
    parent::__construct($origen,$an);
    $this->alto=$alt;
    }

    //metodos de la clase
    public  function Area(){
        return $this->alto*$this->an;
    }

    public  function Perimetro(){
        return $this->ancho*2+$this->alto*2;
    }
    public function Escalar($porc){
        parent::Escalar($porc);
        $this->alto *=$porc;
    }

    public function __toString(){
        return "Se ha creado figura ".$this->getNumFiguras()." de tipo rectangulo: ".parent::__toString().
            ", Alto= ".$this->alto/*.", Ancho=".parent::$this->ancho*/;
    }
}