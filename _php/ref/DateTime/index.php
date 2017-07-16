<?php
echo "Biblioteca DateTime <br>";

$dataHora = new DateTime(); // Pega a Data e A Hora do Sistema
var_dump($dataHora);

// Para Imprimir a hora correta do Sistema é necessário configurar o Fuso Horário
$fuso = new DateTimeZone('America/Sao_Paulo');
$dataHora->setTimezone($fuso);
echo $dataHora->format("d-m-Y H:i:s");
echo " | Data: {$dataHora->format('D-M-Y')}";
echo " | Hora: {$dataHora->format('H:i:s')} <br>";


$dataHora = new DateTime('01-01-1900 12:00:05'); // Passando a Data e Hora diretamente
var_dump($dataHora);

$dataHora->setDate(2002, 2, 22); // Função para alterar a Data
$dataHora->setTime(13, 30, 55); // Função para alterar a Hora

echo $dataHora->format("d-m-Y H:i:s");
echo " | Data: {$dataHora->format('D-M-Y')}";
echo " | Hora: {$dataHora->format('H:i:s')} <br>";

// Outras Formas
$d = "12-12-2006"; // passando data atraves de Strings
$data = DateTime::createFromFormat("d-m-Y", $d);
var_dump($data);
echo $data->format('d-m-Y');


?>
