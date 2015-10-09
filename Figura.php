<?php

/**
 * Created by PhpStorm.
 * User: Jordi
 * Date: 30/09/2015
 * Time: 15:42
 */
namespace Figura;
//namespace Figura;
//use\figura\Punto
require_once('Punto.php');


abstract class Figura
{
    /**
     * @var int
     */
    private static  $_numFiguras=0;
    protected $_origen;

    /**
     * @return Punto
     */
    public function getOrigen()
    {
        return $this->_origen;
    }

    /**
     * @param Punto $origen
     */
    public function setOrigen($origen)
    {
        $this->_origen = $origen;
    }
    /**
     * En PHP solo hay un constructor
     */
    /**
     * @param Punto $origen
     */

    function __construct(Punto $_origen){//\figura\Punto $_origen
        self::$_numFiguras++;//self:: o Figura
        $this->_origen=$_origen;
    }

    /**
     * Funcion estatica
     */
    public static function getNumFiguras(){
    return self::$_numFiguras;
    }

    public function desplazar($dx, $dy){
       $this->_origen->desplazar(dx, dy);
    }

    public function  __toString(){
        return $this->_origen->__toString();
    }

    public function  distancia(Figura $f){
        return $this->_origen->distancia($f->getOrigen());
    }

    public abstract function Area();
    public abstract function Perimetro();
    public abstract function Escalar($porc);
}