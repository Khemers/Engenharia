<?php
error_reporting(4);
session_start();
include_once("./views/layout/menu.php")
?>

<div>
    <form method="post" action="">
        <div class="center">
            <label>
                <input name="name1" placeholder="Digite o nome completo"/>
            </label>
        </div>
        <div class="center">
            <button type="submit" name="search">Buscar conta</button>
        </div>
    </form>
</div>

<?php

if (isset($_POST['search'])) {
    $name = $_POST['name1'];

    $obj = new UsuariosDAO();
    $user = $obj->buscar($name)[0];

    $login = $user->getNomeUsuarios();
    $type = $user->getTipoUsuarios();
    $password = $user->getSenhaUsuarios();

    ?>
    <div>
        <form method="post" action="">
            <div class="center">
                <label>
                    <input name="name" placeholder="Digite o nome completo" value="<?php echo $login?>"/>
                </label>
            </div>
            <div class="center">
                <label>
                    <input name="key" placeholder="Digite a senha" value="<?php echo $password?>"/>
                </label>
            </div>
            <div class="center">
                <button type="submit" name="edit">Alterar</button>
                <button type="submit" name="edit">Excluir</button>
            </div>
        </form>
    </div>
<?php
}
if (isset($_POST['edit'])) {
    $name = $_POST['name1'];
    $login = $_POST['name'];
    $password = $_POST['key'];

    var_dump($name);
    var_dump($login);
    var_dump($password);

    $obj = new UsuariosDAO();
    $obj->alterarConta($name, $login, $password);
}