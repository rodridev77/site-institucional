<?php

class portfolioController extends Controller {

    public function index() {
        $dados = array();

        $portfolio = new Portfolio();
        $dados['portfolio'] = $portfolio->getTrabalhos();

        $this->loadTemplate('portfolio', $dados);
    }

}
