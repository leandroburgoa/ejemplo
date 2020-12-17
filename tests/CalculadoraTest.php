<?php

namespace Tests;

use PHPUnit\Framework\TestCase;
use Libreria\Calculadora;

class CalculadoraTest extends TestCase
{
    /** @test */
    public function sumar()
    {
        $calculadora = new Calculadora();

        $this->assertSame($calculadora->sumar(10, 5), 15);
        $this->assertSame($calculadora->sumar(100, 50), 150);
        $this->assertSame($calculadora->sumar(100, -50), 50);
        $this->assertSame($calculadora->sumar(100, 50.75), 150.75);
        $this->assertSame($calculadora->sumar(100, 'b'), null);
        $this->assertSame($calculadora->sumar('a', 'b'), null);
        $this->assertSame($calculadora->sumar(null, null), null);
        $this->assertSame($calculadora->sumar(true, false), null);
    }

    /** @test */
    public function restar()
    {
        $calculadora = new Calculadora();

        $this->assertSame($calculadora->restar(10, 5), 5);
    }
}
