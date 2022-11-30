<?php

namespace src\poligonos;

class Quadrado
{
    protected $largura;
    protected $altura;
    /**
     * Get the value of largura
     */
    public function getLargura(): float
    {
        return $this->largura;
    }
    /**
     * Get the value of altura
     */
    public function getAltura(): float
    {
        return $this->altura;
    }
    public function setLargura(float $largura): void
    {
        $this->largura = $largura;
        $this->altura = $largura;
    }

    public function setAltura(float $altura): void
    {
        $this->largura = $altura;
        $this->altura = $altura;
    }
}
