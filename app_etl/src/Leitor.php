<?php

namespace App;

class Leitor
{
    private $diretorio;
    private $arquivo;

    /**
     * Get the value of diretorio
     */
    public function getDiretorio(): string
    {
        return $this->diretorio;
    }

    /**
     * Set the value of diretorio
     *
     * @return  self
     */
    public function setDiretorio(string $diretorio): Leitor
    {
        $this->diretorio = $diretorio;

        return $this;
    }

    /**
     * Get the value of arquivo
     */
    public function getArquivo(): string
    {
        return $this->arquivo;
    }

    /**
     * Set the value of arquivo
     *
     * @return  self
     */
    public function setArquivo(string $arquivo)
    {
        $this->arquivo = $arquivo;

        return $this;
    }

    public function lerArquivo()
    {
        $path = $this->getDiretorio() . '/' . $this->getArquivo();
        $arquivo = new Arquivo();

        $extensao = explode('.',$this->getArquivo());
        if($extensao[1] == 'csv'){
            $arquivo->lerArquivoCSV($path);
        }elseif($extensao[1] == 'txt'){
            $arquivo->lerArquivoTXT($path);
        }
        return $arquivo->getDados();
    }
}
