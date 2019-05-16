<?php

class homeController extends Controller {

    public function index() {
        $dados = array();

        $portfolio = new Portfolio();
        $dados['portfolio'] = $portfolio->getTrabalhos(8);

        $this->loadTemplate('home', $dados);
    }

}
