<?php

    function listaProdutos($conexao) {
        $produtos = array();

        $resultado = mysqli_query($conexao, "select p.*, c.nome as cat_nome from produtos as p inner join categorias as c on c.id = p.categoria_id");

        while ($produto = mysqli_fetch_assoc($resultado)) {
            array_push($produtos, $produto);
        }

        return $produtos;
    }

    function alteraProduto($conexao, $id, $nome, $preco, $descricao, $categoria_id) {
        $query = "update produtos set nome = '{$nome}', preco = {$preco}, descricao='{$descricao}', categoria_id={$categoria_id} where id = {$id}";
        return mysqli_query($conexao, $query);
    }

    function buscaProduto($conexao, $id) {
        $query = "select p.*, 
                    c.nome as categoria_nome 
                    from produtos as p
                    inner join categorias as c
                    on c.id = p.categoria_id
                    where p.id = {$id}";
        $resultado = mysqli_query($conexao, $query);
        return mysqli_fetch_assoc($resultado);
    }

    function removeProduto($conexao, $id) {
        $query = "delete from produtos where id = {$id}";
        return mysqli_query($conexao, $query);
    }

