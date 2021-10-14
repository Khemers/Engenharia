<?php
error_reporting(4);
session_start();
include_once("./views/layout/menu.php");

if (isset($_POST['apply'])) {
    $name = $_POST['name'];
    $type = $_POST['type'];
    $password = $_POST['key'];

    $obj = new UsuariosDAO();
    $obj->inserir($name, $type, $password);

}
?>

<div>
    <form method="post" action="">
        <div class="center">
            <label for="type"></label><select name="type" id="type">
                <option value="0" selected>Aluno</option>
                <option value="1">Professor</option>
                <option value="2">Administrador</option>
            </select>
        </div>
        <div class="center">
            <label>
                <input name="name" placeholder="Digite o nome completo"/>
            </label>
        </div>
        <div class="center">
            <label>
                <input type="password" name="key" placeholder="Digite a senha"/>
            </label>
        </div>
        <div class="center">
            <button type="submit" name="apply">Criar conta</button>
        </div>

    </form>
</div>