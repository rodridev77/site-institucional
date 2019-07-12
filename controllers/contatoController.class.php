<?php

class contatoController extends Controller {

    public function index() {
        $dados = array();

        // Preparando estrutura do e-mail
        if (isset($_POST['nome']) && !empty($_POST['nome'])) {
            $nome = addslashes($_POST['nome']);
            $email = addslashes($_POST['email']);
            $msg = addslashes($_POST['mensagem']);

            $para = "suporte@gmail.com";
            $assunto = "Dúvida do Site";
            $mensagem = "Nome: " . $nome . "<br>E-mail: " . $email . "<br>Mensagem: " . $msg;
            $cabecalho = 'From: suporte@gmail.com' . "\r\n" .
                    'Replay-To: ' . $email . "\r\n" .
                    'X-Mailer: PHP/' . phpversion();
            mail($para, $assunto, $mensagem, $cabecalho);

            $dados['aviso'] = "Email enviado com sucesso!";
        }

        $this->loadTemplate('contato', $dados);
    }

}
