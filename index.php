<?php
include_once("./views/layout/header.php")
?>

<form method="post" action="">
    <div class="center">
        <label>
            <input name="email" placeholder="Digite seu e-mail"/>
        </label>
    </div>
    <div class="center">
        <label>
            <input type="password" name="key" placeholder="Digite sua senha"/>
        </label>
    </div>
    <div class="center">
        <button type="submit" name="login"> Entrar</button>
    </div>

</form>