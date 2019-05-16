<!DOCTYPE html>

<html lang="pt-br">
    <head>
        <meta charset="UTF-8">
        <title>Site Institucional</title>
        <link rel="stylesheet" href="<?php echo BASE_URL; ?>/assets/css/template.css">
    </head>
    <body>
        <div class="topo">
            <div class="topo1"></div>
            <div class="banner"></div>
        </div>

        <div class="menu">
            <ul>
                <a href="<?php echo BASE_URL; ?>home"><li>HOME</li></a>
                <a href="<?php echo BASE_URL; ?>portfolio"><li>PORTFOLIO</li></a>
                <a href="<?php echo BASE_URL; ?>sobre"><li>SOBRE</li></a>
                <a href="<?php echo BASE_URL; ?>servico"><li>SERVIÇO</li></a>
                <a href="<?php echo BASE_URL; ?>contato"><li>CONTATO</li></a>
            </ul>
        </div>

        <div class="container">
            <?php $this->loadViewInTemplate($viewName, $viewData); ?>
        </div>

        <div class="rodape"></div>
    </body>
</html>
