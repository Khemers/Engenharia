<?php


class Usuarios {

    private $nomeUsuarios;

    public function getIdUsuarios() {
        return $this -> idUsuarios;
    }
    public function getNomeUsuarios() {
        return $this -> nomeUsuarios;
    }
    public function getTipoUsuarios() {
        return $this -> tipoUsuarios;
    }
    public function getSenhaUsuarios() {
        return $this -> senhaUsuarios;
    }

    public function setIdUsuarios($idUsuarios) {
        $this -> idUsuarios = $idUsuarios;
    }
    public function setNomeUsuarios($nomeUsuarios) {
        $this -> nomeUsuarios = $nomeUsuarios;
    }
    public function setTipoUsuarios($tipoUsuarios) {
        $this -> tipoUsuarios = $tipoUsuarios;
    }
    public function setSenhaUsuarios($senhaUsuarios) {
        $this -> senhaUsuarios = $senhaUsuarios;
    }
}