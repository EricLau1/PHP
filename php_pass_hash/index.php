<?php


$senha1 = "123";

$senha2 = "123";

$hash1 = password_hash($senha1, PASSWORD_DEFAULT);

$hash2 = password_hash($senha2, PASSWORD_DEFAULT);

echo "<h1>senha 1 </h1>";

echo "$hash1 <br>";

echo "<h1> senha 2 </h1>";

echo "$hash2 <br><br><br>";


if( password_verify($senha1, $hash2) && password_verify($senha2, $hash1) ) {
	echo "senhas iguais";
} else {
	echo "senhas diferentes!";
}