<?php
error_reporting(4);
session_start();
include_once("header.php")
?>

<main>
    <nav>
        <ul>
            <?php
            if ($_SESSION['type'] == '0') {
            ?>
            <li><a href="">Visualizar Projetos</a></li>
                <?php
            }
            ?>
            <?php
            if ($_SESSION['type'] == '1') {
            ?>
            <li><a href="">Cadastrar Projetos</a></li>
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
            <li><a href="">Gerenciar Projetos</a></li>
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
            <li><a href="/index.php?action=editUser">Editar Usuários</a></li>
                <?php
            }
            ?>
            <?php
            if ($_SESSION['type'] == '0') {
            ?>
            <li><a href="/index.php?action=changePassword">Alterar Senha</a></li>
                <?php
            }
            ?>
        </ul>
    </nav>
</main>
