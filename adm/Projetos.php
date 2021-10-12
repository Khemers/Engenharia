<?php


class Projetos {

    private $nomeProjetos;

    public function getIdProjetos() {
        return $this -> idProjetos;
    }
    public function getProfessorProjetos() {
        return $this -> professorProjetos;
    }
    public function getNomeProjetos() {
        return $this -> nomeProjetos;
    }
    public function getStatusProjetos() {
        return $this -> statusProjetos;
    }
    public function getTemaProjetos() {
        return $this -> temaProjetos;
    }
    public function getAreaconhecimentoProjeto() {
        return $this -> areaconhecimentoProjeto;
    }
    public function getParticipantesProjetos() {
        return $this -> participantesProjetos;
    }

    public function setIdProjetos($idProjetos) {
        $this -> idProjetos = $idProjetos;
    }
    public function setProfessorProjetos($professorProjetos) {
        $this -> professorProjetos = $professorProjetos;
    }
    public function setNomeProjetos($nomeProjetos) {
        $this -> nomeProjetos = $nomeProjetos;
    }
    public function setStatusProjetos($statusProjetos) {
        $this -> statusProjetos = $statusProjetos;
    }
    public function setTemaProjetos($temaProjetos) {
        $this -> temaProjetos = $temaProjetos;
    }
    public function setAreaconhecimentoProjetos($areaconhecimentoProjetos) {
        $this -> areaconhecimentoProjetos = $areaconhecimentoProjetos;
    }
    public function setParticipantesProjetos($participantesProjetos) {
        $this -> participantesProjetos = $participantesProjetos;
    }
}