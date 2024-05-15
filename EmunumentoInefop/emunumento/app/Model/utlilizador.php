<?php

class logar {
    
    private $senha;
    private $nome;
    private $tipo;
    
    function getSenha() {
        return $this->senha;
    }

    function getNome() {
        return $this->nome;
    }

    function getTipo() {
        return $this->tipo;
    }

    function setSenha($senha) {
        $this->senha = $senha;
    }

    function setNome($nome) {
        $this->nome = $nome;
    }

    function setTipo($tipo) {
        $this->tipo = $tipo;
    }

    
     function vericifaLogin($nome,$tipo,$senha){
        
        $pdo =  conectar(); 
        $res = $pdo->prepare("SELECT *  FROM utilizador where nomeUtilizador  = :NOME AND tipoUtilizador = :TIPO AND Senha = :SENHA");
        $res->bindValue(":NOME",$nome);
        $res->bindValue(":TIPO",$tipo);
        $res->bindValue(":SENHA",$senha);
        $res->execute();
       
        if($res->rowCount()>0){
            
            
            return TRUE;
            
         
            
        } else {
            return FALSE;
            
            
        }
        
        
        
        
        
    }
      
    
    
    
    
    
    
}





?>