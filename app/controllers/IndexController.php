<?php

    namespace app\controllers;

    // Recursos do miniframework
    use MF\Controller\Action;
    use MF\Model\Container;

    // Models do miniframework
    use app\models\Produto;
    use app\models\Info;
    

    class IndexController extends Action {

        // Métodos que representam as actions da especificação da arquitetura MVC.
        // Actions são estes métodos contido nessa classe controladora.

        public function index() {

            // Atribuindo a variável $produto a instância do modelo
            $produto = Container::getModel('Produto');

            // Armazenando à variável $produtos os conjuntos de valores (em formato de array multidimensional) retornados pela função getProdutos()
            $produtos = $produto->getProdutos();

            // Atribuindo os valores obtidos pelo banco de dados àao objeto "dados" da View em questão.
            $this->view->dados = $produtos;

            // Requisitando o método render e enviando a ele o nome da view e os dados contidos na mesma.
            $this->render('index', 'layout1');
        }

        public function sobreNos() {

            $info = Container::getModel('Info');

            $informacoes = $info->getInfo();

            $this->view->dados = $informacoes;

            // Requisitando o método render e enviando a ele o nome da view e os dados contidos na mesma.
            $this->render('sobreNos', 'layout1');

            
        }

    }


?>