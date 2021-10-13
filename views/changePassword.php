<?php
include_once("./views/layout/menu.php");
require_once("./adm/UsuariosDAO.php")
?>

<div>
    <form method="post" action="">
        <div class="center">
            <label>
                <input name="currentKey" placeholder="Digite sua senha atual"/>
            </label>
        </div>
        <div class="center">
            <label>
                <input type="password" name="newKey" placeholder="Digite sua nova senha"/>
            </label>
        </div>
        <div class="center">
            <button type="submit" name="apply">Alterar</button>
        </div>

    </form>
</div>