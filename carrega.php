<?php

  ini_set('max_execution_time', 0);

  require 'conexao.php';
  $filename = './produtos.csv';

  if (file_exists($filename)) {

    if (mysqli_query($conecta,
      "LOAD DATA INFILE '$filename' INTO TABLE produtos "
      + "FIELDS TERMINATED BY ';' " // fim da coluna
      + "LINES TERMINATED BY '\n' " // fim da linha
      + "IGNORE 1 ROWS "            // ignorar cabeçalho
    )) {
      echo "Carregado com sucesso!";
    } else {
      echo "Não conseguiu carregar o arquivo!";
    };
  } else {
    echo 'Arquivo não existe!';
  }

?>