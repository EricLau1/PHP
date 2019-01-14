<?php


// nome do arquivo
$arquivo = "text.txt";

// abre o arquivo
$fp = fopen($arquivo, "a+");

if(!file_exists($arquivo)) {

    // escreve no arquivo
    fwrite( $fp, (new DateTime)->format("d-m-Y H:m:s") );

} else {

    // escreve no arquivo
    fwrite($fp, "\n");
    fwrite( $fp, (new DateTime)->format("d-m-Y H:m:s") );
}



// fecha o arquivo
fclose($fp);

echo "O parametro \'a+\' Abre somente para escrita, coloca o ponteiro do arquivo no final do arquivo. Se o arquivo não existir, tenta criá-lo.";
echo "<br/>";
echo "<a href='ler.php'> ler arquivo </a>";