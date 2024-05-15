<?php
        
        
        class emunumento{
            
            private $id;
            private $descricao;
            private $modelo;
            private $memoriaram;
            private $memoriahd;
            private $processador;
            private $imagem;
            private $data;
            private $qtd;
            private $preco;
            private $tipoProcessador;
            
            
            function getTipoProcessador() {
                return $this->tipoProcessador;
            }

            function setTipoProcessador($tipoProcessador) {
                $this->tipoProcessador = $tipoProcessador;
            }

                                
            function getId() {
                return $this->id;
            }

            function getDescricao() {
                return $this->descricao;
            }

            function getModelo() {
                return $this->modelo;
            }

            function getMemoriaram() {
                return $this->memoriaram;
            }

            function getMemoriahd() {
                return $this->memoriahd;
            }

            function getProcessador() {
                return $this->processador;
            }

            function getImagem() {
                return $this->imagem;
            }

            function getData() {
                return $this->data;
            }

            function getQtd() {
                return $this->qtd;
            }

            function getPreco() {
                return $this->preco;
            }

            function setId($id) {
                $this->id = $id;
            }

            function setDescricao($descricao) {
                $this->descricao = $descricao;
            }

            function setModelo($modelo) {
                $this->modelo = $modelo;
            }

            function setMemoriaram($memoriaram) {
                $this->memoriaram = $memoriaram;
            }

            function setMemoriahd($memoriahd) {
                $this->memoriahd = $memoriahd;
            }

            function setProcessador($processador) {
                $this->processador = $processador;
            }

            function setImagem($imagem) {
                $this->imagem = $imagem;
            }

            function setData($data) {
                $this->data = $data;
            }

            function setQtd($qtd) {
                $this->qtd = $qtd;
            }

            function setPreco($preco) {
                $this->preco = $preco;
            }


            
            
            
            
            
            
            
            
        }
        
        
        
        
        
        
        
        
        
        
        
        ?>
