<?php

/*
    Proyecto:   Libreria de Ejemplo
    Autor:      Leandro Ignacio Burgoa (leandroburgoa@gmail.com)
    Version:    1.0.0
    Fecha:      16/12/2020
    Modificaciones:
        Version     Fecha           Autor               Cambios
        1.0.0       16/12/2020      Leandro Burgoa      Primer version del sistema.
*/

/* Namespace */
namespace Libreria;

/* Use */
use Libreria\Clase;

/* Class */
class Calculadora
{
    
    /* Properties */
    private $resultado;

    /* Construct */
    public function __construct()
    {
    }

    /* Destruct */
    public function __destruct()
    {
    }

    /* Gets & Sets */
    public function getResultado()
    {

        return $this->resultado;
    }

    public function setResultado($resultado)
    {

        $this->resultado = $resultado;
    }

    /* Methods */
    public function sumar($a, $b)
    {

        if (is_numeric($a) && is_numeric($b)) {
            return $a + $b;
        }
    }

    public function restar($a, $b)
    {

        if (is_numeric($a) && is_numeric($b)) {
            return $a - $b;
        }
    }
}
