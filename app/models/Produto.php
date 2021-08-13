<?php

    namespace app\models;

    use MF\Model\Model;

    class Produto extends Model {

        public function getProdutos() {
            // Criando e requisitando uma query
            $query =    "SELECT id, descricao, preco FROM tb_produtos";
            // Retornar, o valor retornado pelo método query() do atributo db dessa classe conforme a $query criada aqui. Esse retorno traz um PDO Statement, ou seja, um objeto PDO que contém os resultados da consulta mas ainda em um estágio em que pode ser tratado, pode ser aplicado filtros. Como o objetivo é retornar todos os registros, está sendo utilizado o método fetchAll().
            return $this->db->query($query)->fetchAll();
        }
    }

?>