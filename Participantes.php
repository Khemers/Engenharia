<?php


class Participantes {

    private $nomeParticipantes;

    public function getIdParticipantes() {
        return $this -> idParticipantes;
    }
    public function getNomeParticipantes() {
        return $this -> nomeParticipantes;
    }
    public function getProjetoParticipantes() {
        return $this -> projetoParticipantes;
    }

    public function setIdParticipantes($idParticipantes) {
        $this -> idParticipantes = $idParticipantes;
    }
    public function setNomeParticipantes($nomeParticipantes) {
        $this -> nomeParticipantes = $nomeParticipantes;
    }
    public function setProjetoParticipantes($projetoParticipantes) {
        $this -> projetoParticipantes = $projetoParticipantes;
    }
}