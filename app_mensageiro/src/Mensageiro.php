<?php

namespace src;

class Mensageiro
{
    private $canal;

    /**
     * Get the value of canal
     */ 
    public function getCanal(): string
    {
        return $this->canal;
    }

    /**
     * Set the value of canal
     *
     * @return  self
     */ 
    public function setCanal(string $canal): void
    {
        $this->canal = $canal;
    }

      
    public function enviarToken():void
    {
        $classe = '\src\\'.ucfirst($this->getCanal());

        $obj = new $classe;
        $obj->enviar();
    }
}
