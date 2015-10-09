<?php
/**
 * Created by PhpStorm.
 * User: Jordi
 * Date: 06/10/2015
 * Time: 15:51
 */

namespace Figura;
require_once 'Punto.php';
require_once 'Figura.php';
require_once 'Circulo.php';
require_once 'Cuadrado.php';
require_once 'Rectangulo.php';
require_once 'Triangulo.php';
class Index
{
    public static function  pruebaPunto(){
        $p=new Punto(3,4);
        echo $p.'<br/>';

        //Desplazar un punto
        $p->desplazar(6,3);
        echo $p.'<br/>';
    }
	public static function pruebaCuadrado(){
        $p=new Punto(2,8);
        $c1=new Cuadrado($p, 9);
        echo $c1;
        echo "<p>El area del cuadrado es: ".$c1->Area().'</p>';
        echo "<p>El perimetro del cuadrado es: ".$c1->Perimetro()."</p>";
        echo $c1->Escalar(22)."<p>El ancho del cuadrado ahora es: ".$c1;
	}
    public static  function pruebaRectangulo(){
        $p=new Punto(3,9);
        $rec=new Rectangulo($p,4,9);
        echo $rec;
        //echo "El area del Rectangulo es: ".$rec->Area();
    }
    public static function pruebaCirculo(){
        $p1=new Punto(5,12);
        $cir=new Circulo($p1, 6);
        echo $cir;
        echo "<p>El area del cuadrado es: ".$cir->Area()."</p>";
        echo "<p>El Perimetro del circulo es: ".$cir->Perimetro();
        $cir->Escalar(6);
        echo "<p>El radio del circulo ahora es: ".$cir."</p>";
    }
    public static function pruebaTriangulo(){
        $p =new Punto(1,9);
        $tr=new Triangulo($p, 4,12);
        echo $tr;
        echo "<p>El area del triangulo es: ".$tr->Area()."</p>";
        echo "<p>El Perimetro del triangulo es: ".$tr->Perimetro();
        $tr->Escalar(8);
        echo "<p>La base y altura del triangulo ahora es: ".$tr."</p>";
    }
}
//Index::pruebaPunto();
//Index::pruebaCuadrado();
Index::pruebaRectangulo();
//Index::pruebaCirculo();
//Index::pruebaTriangulo();