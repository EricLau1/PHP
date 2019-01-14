<?php

$arquivo = "text.txt";

// o parametro "r" Abre somente para leitura; coloca o ponteiro do arquivo no começo do arquivo.
$fp = fopen($arquivo, "r");

$conteudo = fread($fp, filesize($arquivo) );

fclose($fp);

echo $conteudo;