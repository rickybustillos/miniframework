<?php

    ## REQUISITOS FUNCIONAIS (Dentro da aplicação) ## 


    // Associar os namespaces como o nome dos respectivos diretórios.
    // Essa portanto, é a especificação PSR-4, onde espera que o script contido dentro de um determinado diretório esteja em um namespace compatível com aquele respectivo diretório.
    namespace app;

    // Utilizar a classe Bootstrap contida no namespace \MF\Init\
    use MF\Init\Bootstrap;

    class Route extends Bootstrap {

        // Verificar quais são as rotas que a aplicação possui
        // initRoutes = Iniciar as rotas
        protected function initRoutes() {
            // Criando duas rotas, caso entre em alguma delas, tomar decisões
            $routes['home'] = array(
                // Indicar que o controlador que entrará em ação é o indexController.php
                    // Definindo um índice chamado "route" que recebe a rota raiz "/".
                    'route' => '/',
                    // Definindo o controller
                    'controller' => 'indexController',
                    // Definir a ação dentro do controlador que será disparada quando essa rota for requisitada
                    'action' => 'index'
            );

            $routes['sobre_nos'] = array(
                    // Definindo um índice chamado "route" que recebe a rota "/sobre_nos".
                    'route' => '/sobre_nos',
                    // Definindo o controller
                    'controller' => 'indexController',
                    // Definir a ação dentro do controlador que será disparada quando essa rota for requisitada
                    'action' => 'sobreNos'
            );

            // Criado os arrays de rotas, passar os parâmetros desse array ao atributo privado $routes utilizando o método setter
            $this->setRoutes($routes);
        }

    }

?> 