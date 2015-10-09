<?php
/**
 * Created by PhpStorm.
 * User: Jordi
 * Date: 08/10/2015
 * Time: 19:19
 */

namespace Figura;
require_once 'Punto.php';
require_once 'Figura.php';
class Triangulo extends Figura
{
    private $base;
    private $altura;

    /**
     * @return mixed
     */
    public function getAltura()
    {
        return $this->altura;
    }

    /**
     * @param mixed $altura
     */
    public function setAltura($altura)
    {
        $this->altura = $altura;
    }

    /**
     * @return mixed
     */
    public function getBase()
    {
        return $this->base;
    }

    /**
     * @param mixed $base
     */
    public function setBase($base)
    {
        $this->base = $base;
    }

    //Constructor de la clase
    public function __construct(Punto $origen, $b, $a){
        parent::__construct($origen);
        $this->base=$b;
        $this->altura=$a;
    }

    //Metodos de la clase
    public function Area(){
        return $this->base*$this->altura/2;
    }

    public function Perimetro(){
        return sqrt(pow($this->altura, 2)+pow($this->base/2,2)*2+$this->base);
    }

    public function Escalar($porc){
        $this->base *=$porc;
        $this->altura *=$porc;
    }

    public function __toString(){
        return "Se ha creado figura ".$this->getNumFiguras()." de tipo Triangulo: ".parent::__toString().
            ", Base=".$this->base.", Altura=".$this->altura;
    }
}