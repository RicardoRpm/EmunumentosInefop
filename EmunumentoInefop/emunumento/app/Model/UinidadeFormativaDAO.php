<?php


require_once "../Model/conexao.php";


    class UnidadeDAO{
    
      
        function inserirUnidadeFormativa($NomeUnidade, $contactoUnidade, $siglaUnidade,$nivelInst,$enderecoUnidade,$emailUnidade,$pegaIdProvincia,$pegaIdResponsavel){

        $pdo =  conectar(); 
        $res = $pdo->prepare("INSERT INTO instituicao ( nomeInst , sigla , nivel , endereco ,telefonInstitui , email,responsavel_idresponsavel, provincia_idprovincia  ) VALUES (:nome, :sigla,:nivel,:endereco,:telefone,:email,:idResp,:idProv)");
        $res->bindValue(":nome",$NomeUnidade);
        $res->bindValue(":sigla",$siglaUnidade);
        $res->bindValue(":nivel",$nivelInst);
        $res->bindValue(":endereco",$enderecoUnidade);
        $res->bindValue(":telefone",$contactoUnidade);
        $res->bindValue(":email",$emailUnidade);
        $res->bindValue(":idResp",$pegaIdResponsavel);
        $res->bindValue(":idProv",$pegaIdProvincia);
        
        $res->execute();
        
         if($res->rowCount()>0){
            
           $Result = TRUE;
          
        return $Result;
            
        } else {
            $Result = FALSE;
            
             return $Result;
        }
        
        
        
        
        

        }
    
    function actualizarUnidade($nome, $tipo, $senha, $id){
      
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
    
        
        function apagarUnidade($id){
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
        
       
        function buscarUnidade(){
       
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