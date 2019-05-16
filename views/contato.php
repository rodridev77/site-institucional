<div class="contato">
    <h1>Contato</h1>
    <div class="aviso">
        <?php
        if (!empty($aviso)) {
            echo $aviso . "<br><br>";
        }
        ?>
    </div>
    <form method="post">
        Nome:<br>
        <input type="text" name="nome"><br><br>
        Email:<br>
        <input type="email" name="email"><br><br>
        Mensagem:<br>
        <textarea name="mensagem"></textarea><br><br>
        <input type="submit" value="Enviar Mensagem">
    </form>
</div>