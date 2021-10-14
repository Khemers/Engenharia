<?php
error_reporting(4);
session_start();
include_once("./views/layout/menu.php");
require_once("./adm/UsuariosDAO.php");

if (isset($_POST['apply'])) {
    $currentKey = $_POST['currentKey'];
    $newKey = $_POST['newKey'];

    $obj = new UsuariosDAO();

    $obj->alterarSenha($_SESSION['login'], $currentKey, $newKey);
}
?>

<div>
    <form method="post" action="">
        <div class="center">
            <label>
                <input type="password" name="currentKey" placeholder="Digite sua senha atual"/>
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