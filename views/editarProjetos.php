<?php

error_reporting(4);
session_start();
include_once("./views/layout/menu.php");
require_once("./adm/ParticipantesDAO.php");

function editar($projeto) {

}

$mysqli = mysqli_connect("localhost", "root", "root", "pesquisa");
$res = mysqli_query($mysqli, 'select * from projetos');
mysqli_close($mysqli);
?>


<?php
    while($array = mysqli_fetch_assoc($res)) {
        if ($array['professorProjetos'] == $_SESSION['login']) {
?>
    <div>
        <label>
            <div>
                <?=$array['nomeProjetos']?>
                <?=$array['temaProjetos']?>
                <?=$array['areaconhecimentoProjetos']?>
                <?=$array['statusProjetos']?>
                <button onclick="function editar(<?=$array['nomeProjetos']?>)">Editar</button>
            </div>
        </label>
    </div>
<?php
    }
    }
