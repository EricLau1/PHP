PHP & MYSQL USANDO A CLASSE *PDO*

versão do php: 7.0.10

Video Aula: https://www.youtube.com/playlist?list=PLbXvLovKLUIkE78UNFE8UpfOtoDlrpQec

Software Necessário: Wampserver

Editor de texto Usado: Atom

Para executar os arquivos, é necessário executar o Wampserver até o icone ficar verde.

Também será necessário criar o banco de dados, os arquivos com os comando estão na pasta sql_scripts.

É preciso criar a pasta Projects dentro da pasta www do Wamp64 e colocar a,

pasta clonada com os arquivos dentro dela.

Se tudo estiver certo é só colocar o link na URL:

a1 - echo "Conectando o Banco"; ~> http://localhost/Projects/php_MySql/a1/Conexao.php

a2 - echo "INSERT"; ~> http://localhost/Projects/php_MySql/a2/Conexao.php

a3 - echo "SELECT & TABLE"; ~> http://localhost/Projects/php_MySql/a3/Conexao.php


a4 - echo "SELECT"; ~> http://localhost/Projects/php_Mysql/a4/Select.php

a5 -  echo "UPDATE"; ~> http://localhost/Projects/php_MySql/a5/Update.php?id=2&nome=Caderno&valor=18.5&qtde=30

a6 - echo "DELETE"; ~> http://localhost/Projects/php_MySql/a6/Delete.php

*****************************************************************************************
O proximo Arquivo so funcionará caso as tabelas sejam configuradas com a engine = InnoDB

Caso as tabelas estejam como MyISAM faça o seguinte comando para alterar a engine das tabelas:

alter table Nome_Da_Tabela engine = InnoDB;

*****************************************************************************************

a7 - echo "TRANSAÇÕES"; ~> http://localhost/Projects/php_MySql/a7/Transacao.php
