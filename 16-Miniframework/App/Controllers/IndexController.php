<?php

namespace App\Controllers;

use MF\Controller\Action;
use MF\Model\Container;

class IndexController extends Action {

    public function index () {

        $produto = Container::getModel("Produto");

        $this->view->dados = $produto->getProdutos();

        $this->render('index', 'layout1');

    }

    public function sobreNos () {

        $info = Container::getModel("Info");

        $this->view->dados = $info->getInfo();

        $this->render('sobreNos', 'layout1');

        
    }

}

?>