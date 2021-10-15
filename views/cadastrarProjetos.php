<?php
error_reporting(4);
session_start();
include_once("./views/layout/menu.php");
require_once("./adm/ProjetosDAO.php");

if (isset($_POST['apply'])) {
    $obj = new ProjetosDAO();
    $obj->inserir($_SESSION['login'], $_POST['name'], '1', $_POST['tema'], $_POST['area']);
}

?>

<div>
    <form method="post" action="">
        <div class="center">
            <label>
                <input type="text" name="name" placeholder="Digite o título"/>
            </label>
        </div>
        <div class="center">
            <label>
                <input type="text" name="tema" placeholder="Digite o tema"/>
            </label>
        </div>
        <div class="center">
            <label>
                <input type="text" name="area" placeholder="Digite a area de conhecimento"/>
            </label>
        </div>
        <div class="center">
            <label>
                <input style="height: 120px; width:360px;" type="text" name="descricao" placeholder="Digite a descrição" size="20"/>
            </label>
        </div>
        <div class="center">
            <button type="submit" name="apply">Criar</button>
        </div>

    </form>
</div>