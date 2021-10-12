<?php
if (isset($_POST['login'])) {
    $login = $_POST['email'];
    $password = $_POST['key'];

    if ($login == 'admin') { // senha: admin
        if (password_verify($password, '$2y$10$qUYpul9kyWhe6gDLpQ6tg.vBqytjwfOijOqjMuwqusSxtLE..kIZy')) {
            session_start();
            //$_SESSION['login'] = $login;
            header("Location: /views/layout/menu.php");
        }
        else {
            $error = "Senha incorreta";
        }
    }
    else { // login incorreto
        $error = "Login incorreto";
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
    </div>
<?php
}
?>
