<?php


    $conn = new mysqli("localhost", "root", "", "csv3");
    mysqli_set_charset($conn,"utf8");

    $arquivo                     = $_FILES["file"]["tmp_name"];
    $nome                        = $_FILES["file"]["name"];

    $ext = explode(".", $nome);

    $extensao = end($ext);

    if($extensao != "csv"){
        echo "Extensão inválida";
    } else{
        $objeto = fopen($arquivo, 'r'); //função de ler arquivo na qual receberá o arquivo de upload

        while(($dados = fgetcsv($objeto, 1000, ";")) !== FALSE)
        {
            $produto= utf8_encode($dados[0]);
            $cod_barra= utf8_encode($dados[1]);
            $categoria = utf8_encode($dados[2]);
            $preço_de_custo = utf8_encode($dados[3]);
            $preço_de_venda = utf8_encode($dados[4]);

            $result = $conn->query("INSERT INTO import (produto, cod_barra, categoria, preço_de_custo, preço_de_venda) VALUES('$produto', '$cod_barra', '$categoria','$preço_de_custo', '$preço_de_venda')");

        }

        if($result){
            echo "Dados inseridos com sucesso";
        } else{
            echo "Erro ao inserir os dados";
        }
    }

?>