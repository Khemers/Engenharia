<?php
error_reporting(4);
session_start();
include_once("header.php")
?>

<main>
    <nav>
        <ul>
            <?php
            if ($_SESSION['type'] == '0' or $_SESSION['type'] == '1' or $_SESSION['type'] == '2') {
            ?>
            <li><a href="/index.php?action=visualizarProjetos">Visualizar Projetos</a></li>
                <?php
            }
            ?>
            <?php
            if ($_SESSION['type'] == '1') {
            ?>
            <li><a href="/index.php?action=cadastrarProjetos">Cadastrar Projetos</a></li>
                <?php
            }
            ?>
            <?php
            if ($_SESSION['type'] == '1') {
            ?>
            <li><a href="">Publicar Projetos</a></li>
                <?php
            }
            ?>
            <?php
            if ($_SESSION['type'] == '1') {
            ?>
            <li><a href="/index.php?action=editarProjetos">Gerenciar Projetos</a></li>
                <?php
            }
            ?>
            <?php
            if ($_SESSION['type'] == '2') {
            ?>
            <li><a href="/index.php?action=createUser">Cadastrar Usuários</a></li>
                <?php
            }
            ?>
            <?php
            if ($_SESSION['type'] == '2') {
            ?>
            <li><a href="/index.php?action=editUser">Gerenciar Usuários</a></li>
                <?php
            }
            ?>
            <?php
            if ($_SESSION['type'] == '0' or $_SESSION['type'] == '1' or $_SESSION['type'] == '2') {
            ?>
            <li><a href="/index.php?action=changePassword">Alterar Senha</a></li>
                <?php
            }
            ?>
        </ul>
    </nav>
</main>
