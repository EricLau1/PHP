<style>
    td, th {
		padding: 10px;
		border: 1px solid silver;
	}
</style>

<?php

  echo "<hr>";
  echo "Escrevendo em Arquivos <br>";

   echo "<table>";

   echo "<th>Valor</th> <th>Descrição</th>";

   echo "<tr> <td> r </td> <td> Abre somente para leitura; coloca o ponteiro do arquivo no começo do arquivo. </td> </tr>";

   echo "<tr> <td> r+ </td> <td> Abre para leitura e escrita; coloca o ponteiro do arquivo no começo do arquivo. </td> </tr>";

   echo "<tr> <td> w </td> <td> Abre somente para escrita; coloca o ponteiro do arquivo no começo do arquivo e reduz
   o comprimento do arquivo para zero. Se o arquivo não existir, tenta criá-lo. </td> </tr>";

   echo "<tr> <td> w+ </td> <td> Abre para leitura e escrita; coloca o ponteiro do arquivo no começo do
   arquivo e reduz o comprimento do arquivo para zero. Se o arquivo não existir, tenta criá-lo. </td> </tr>";

   echo "<tr> <td> a </td> <td> Abre somente para escrita; coloca o ponteiro do arquivo no final do arquivo. Se o arquivo
   não existir, tenta criá-lo. </td> </tr>";

   echo "<tr> <td> a+ </td> <td> Abre para leitura e escrita; coloca o ponteiro do arquivo no final do arquivo.
   Se o arquivo não existir, tenta criá-lo.</td> </tr>";

   echo "<tr> <td> x </td> <td> Cria e abre o arquivo somente para escrita; coloca o ponteiro no começo do arquivo.
   Se o arquivo já existir, a chamada a fopen() falhará, retornando FALSE e gerando um erro de nível E_WARNING.
   Se o arquivo não existir, tenta criá-lo. Isto é equivalente a especificar as flags O_EXCL|O_CREAT para a chamada
   de sistema open(2). </td> </tr>";

   echo "<tr> <td> x+ </td> <td>Cria e abre o arquivo para leitura e escrita; coloca o ponteiro no começo do arquivo.
   Se o arquivo já existir, a chamada a fopen() falhará, retornando FALSE e gerando um erro de nível E_WARNING.
   Se o arquivo não existir, tenta criá-lo. Isto é equivalente a especificar as flags O_EXCL|O_CREAT para a chamada de
   sistema open(2). </td> </tr>";

   echo "</table>";

   echo "Gravando texto no Arquivo.txt <br>";

   function gravar($texto){
		//Variável arquivo armazena o nome e extensão do arquivo.
		$arquivo = "arquivo.txt";

		//Variável $fp armazena a conexão com o arquivo e o tipo de ação.
		$fp = fopen($arquivo, "w+");

		//Escreve no arquivo aberto.
		fwrite($fp, $texto);

		//Fecha o arquivo.
		fclose($fp);
    }


    gravar("Ola Mundo!");
    echo "<br>Informação gravada com sucesso!";

    echo "<hr>";

    echo "Lendo o Arquivo.txt <br>";

    function ler(){
  		//Variável arquivo armazena o nome e extensão do arquivo.
  		$arquivo = "arquivo.txt";

  		//Variável $fp armazena a conexão com o arquivo e o tipo de ação.
  		$fp = fopen($arquivo, "r");

  		//Lê o conteúdo do arquivo aberto.
  		while (!feof ($fp)) {
  			$valor = fgets($fp, 4096);

  			echo $valor."<br>";
  		}
  		//Fecha o arquivo.
  		fclose($fp);

  		//retorna o conteúdo.
  	}

    echo "<br>Informação do Arquivo: ";
  	echo ler();

   /* function ler(){
		//Variável arquivo armazena o nome e extensão do arquivo.
		$arquivo = "arquivo.txt";

		//Variável $fp armazena a conexão com o arquivo e o tipo de ação.
		$fp = fopen($arquivo, "r");

		//Lê o conteúdo do arquivo aberto.
		$conteudo = fread($fp, filesize($arquivo));

		//Fecha o arquivo.
		fclose($fp);

		//retorna o conteúdo.
		return $conteudo;
    }

    echo ler(); */


?>
