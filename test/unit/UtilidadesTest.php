<?php
use PHPUnit\Framework\TestCase;

final class UtilidadesTest extends TestCase
{
    /** @test */
    public function testDivision(){
       $utilidades = new App\Utilidades;
       $this->assertEquals(4,$utilidades->division(4,2));
    }
    /** @test */
    public function testDivisionSame(){
        $utilidades = new App\Utilidades;
        $this->assertSame(6,$utilidades->division(6,2));
     }
    /** @test */
    public function extraerNumeroTest(){
        $utilidades = new App\Utilidades;
        $this->assertEquals(10,$utilidades->extraerNumero("Prueba 10 texto cadena"));
     }
      /** @test */
    public function extraerNumeroTestSame(){
        $utilidades = new App\Utilidades;
        $this->assertSame(15,$utilidades->extraerNumero("Prueba 15 texto cadena"));
     }
}
