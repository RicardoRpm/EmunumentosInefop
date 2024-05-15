<?php


require_once "./conexao.php";


    class responsavelDAO{
    
      
        function inserirResponsavel($nome ,$telefon,$email){

        $pdo =  conectar(); 
        $res = $pdo->prepare("INSERT INTO responsavel (nomeRespon  , telefoneRespon , email ) VALUES (:nome, :telefon, :email)");
        $res->bindValue(":nome",$nome);
        $res->bindValue(":telefon",$telefon);
        $res->bindValue(":email",$email);
        $res->execute();
        
         if($res->rowCount()>0){
            
           $Result = TRUE;
          
        return $Result;
            
        } else {
            $Result = FALSE;
            
             return $Result;
        }
        
        
        
        
        

        }
    
    function actualizarResponsavel($nome, $tipo, $senha, $id){
      
        $pdo =  conectar(); 
        $res = $pdo->prepare("INSERT INTO utilizador (nomeUtilizador, tipoUtilizador, Senha) VALUES (:nome, :tipo, :senha)");
        $res->bindValue(":nome",$nome);
        $res->bindValue(":tipo",$tipo);
        $res->bindValue(":senha",$senha);
        $res->execute();
        
        if($res->rowCount()>0){
            
           $Result = TRUE;
          
        return $Result;
            
        } else {
            $Result = FALSE;
            
            
        }
        
        }
    
        
        function apagarResponsavel($id){
        $pdo =  conectar(); 
        $res = $pdo->prepare("INSERT INTO utilizador (nomeUtilizador, tipoUtilizador, Senha) VALUES (:nome, :tipo, :senha)");
        $res->bindValue(":nome",$nome);
        $res->bindValue(":tipo",$tipo);
        $res->bindValue(":senha",$senha);
        $res->execute();
        if($res->rowCount()>0){
            
           $Result = TRUE;
          
        return $Result;
            
        } else {
            $Result = FALSE;
            
            
        }
  
        }
        
       
        function buscarResponsavel(){
       
        $pdo =  conectar(); 
        $res = $pdo->prepare("SELECT *  FROM provincia");
        $res->execute();
       
        if($res->rowCount()>0){
            
            
            return $res;
          
       
            
        } else {
             return " <script> alert('Erro ao Carregar Provincia') </script>";
            
            
        }
        
        
        
      
        
    
        }
        
        
        
        
        
        
    
    }







?>