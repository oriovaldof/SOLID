<?php

namespace src\extrator;


class Txt extends Arquivo
{
    public function lerArquivo(string $path): array
    {
        $handle = fopen($path, 'r');
        while (!feof($handle)) {
            $linha = fgets($handle);
            $this->setDados(
                substr($linha, 11, 30),//nome
                substr($linha, 0, 11),//cpf
                substr($linha, 41, 50)//email
            );
        }
        fclose($handle);

        return $this->getDados();
    }
}
