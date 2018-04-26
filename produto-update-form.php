<?php include_once("cabecalho.php");
    $conexao = mysqli_connect("localhost", "root", "", "loja"); 
arquivo de manipulação dos produtos no banco de dados


realizar a busca do produto: $_GET['id']

Montar o formulário (os dados desse formulário deve ser enviado para o arquivo produto-update.php)
    Nome: $produto['nome']
    Preço
    Descrição
    Categoria   
        Carregar todas as categorias existentes no banco de dados
        Montar um campo <select com todas as categorias
        Manter nesse campo select, a categoria definida no cadastro do produto
            $produto['categoria_id'] == $categaria['id']
                Configurar a tag option com checked


 include_once("rodape.php") ?>