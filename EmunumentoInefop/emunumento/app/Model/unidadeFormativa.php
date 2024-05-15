<?php


    class unidadeFormativa{
    
        private  $nomeInsti;
        private $sigla;
        private $contacto;
        private $nivel;
        private $endereco;
        private $telefonInst;
        private $email;
        
        
        function getNomeInsti() {
            return $this->nomeInsti;
        }

        function getSigla() {
            return $this->sigla;
        }

        function getContacto() {
            return $this->contacto;
        }

        function getNivel() {
            return $this->nivel;
        }

        function getEndereco() {
            return $this->endereco;
        }

        function getTelefonInst() {
            return $this->telefonInst;
        }

        function getEmail() {
            return $this->email;
        }

        function setNomeInsti($nomeInsti) {
            $this->nomeInsti = $nomeInsti;
        }

        function setSigla($sigla) {
            $this->sigla = $sigla;
        }

        function setContacto($contacto) {
            $this->contacto = $contacto;
        }

        function setNivel($nivel) {
            $this->nivel = $nivel;
        }

        function setEndereco($endereco) {
            $this->endereco = $endereco;
        }

        function setTelefonInst($telefonInst) {
            $this->telefonInst = $telefonInst;
        }

        function setEmail($email) {
            $this->email = $email;
        }



    
    
    
    
}




?>