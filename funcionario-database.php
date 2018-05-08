<?php

    function listaFuncionarios($conexao) {
        $funcionarios = array();

        $query_select= ("select * from funcionarios");
        $resultado = mysqli_query($conexao, $query_select);

        while ($funcionario = mysqli_fetch_assoc($resultado)) {
            array_push($funcionarios, $funcionario);
        }

        return $funcionarios;
    }

    function alteraFuncionario($conexao, $id, $nome, $preco, $descricao, $categoria_id) {
        $query = "update produtos set nome = '{$nome}', preco = {$preco}, descricao='{$descricao}', categoria_id={$categoria_id} where id = {$id}";
        return mysqli_query($conexao, $query);
    }

    function buscaFuncionario($conexao, $id) {
        $query = "select p.*, 
                    c.nome as categoria_nome 
                    from produtos as p
                    inner join categorias as c
                    on c.id = p.categoria_id
                    where p.id = {$id}";
        $resultado = mysqli_query($conexao, $query);
        return mysqli_fetch_assoc($resultado);
    }

    function removeFuncionario($conexao, $id) {
        $query = "delete from produtos where id = {$id}";
        return mysqli_query($conexao, $query);
    }

