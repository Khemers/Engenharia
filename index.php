<?php
session_start();
require_once("./adm/UsuariosDAO.php");

if (isset($_POST['login'])) {
    $login = $_POST['name'];
    $key = $_POST['key'];

    $obj = new UsuariosDAO();

    $password = $obj->buscar($login)[0]->getSenhaUsuarios();

    if ($key == $password) {
        $_SESSION['type'] = $obj->buscar($login)[0]->getTipoUsuarios();
        header("Location: /views/layout/menu.php");
    }
    else {
        $error = "Senha incorreta";
    }
}
?>

<title>Nome</title>
<link rel="stylesheet" href="views/style.css">

<?php
if(isset($_GET['action'])) {
    include_once("./views/{$_GET['action']}.php");
} else {
    ?>
    <main>
    <div>
        <form method="post" action="">
            <div class="center">
                <label>
                    <input name="name" placeholder="Digite seu nome completo"/>
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
    </div>
<?php
}
?>
