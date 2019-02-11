<?php

namespace Utilidades;

class Utilidades { 
    public function division($dividendo,$divisor) { 
        return $dividendo/$divisor;
    } 
    public function extraerNumero($texto) { 
        $numeros = intval(preg_replace('/[^0-9]+/', ' ', $cadena), 10); 
        $numeros = explode(" ",$numeros);
        return $numeros[0];
    } 
} 
