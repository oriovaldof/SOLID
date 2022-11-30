<?php

namespace src\extrator;

class Csv extends Arquivo
{
    public function lerArquivo(string $path): array
    {
        $handle = fopen($path, 'r');
        while (($linha = fgetcsv($handle, 10000, ';')) !== false) {
            $this->setDados($linha[0], $linha[1], $linha[2]);
        }
        fclose($handle);

        return $this->getDados();
    }
}
