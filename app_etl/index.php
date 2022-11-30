<?php

use App\Leitor;

require __DIR__."/vendor/autoload.php";


$leitor = new Leitor();
$leitor->setDiretorio(__DIR__.'/arquivos');



//------------CSV----------------
$leitor->setArquivo('dados.csv');
$arrayCsv = $leitor->lerArquivo();

//------------TXT----------------
$leitor->setArquivo('dados.txt');
$arrayTxt = $leitor->lerArquivo();

echo '<pre>';
print_r(array_merge($arrayCsv,$arrayTxt));
echo '</pre>';