<?php





    class loga{
    
      
        function criarUtilizador($nome ,$tipo,$senha){

        $pdo =  conectar(); 
        $res = $pdo->prepare("INSERT INTO utilizador (nomeUtilizador,tipoUtilizador,Senha) VALUES (:nome,:tipo,:senha)");
        $res->bindValue(":nome",$nome);
        $res->bindValue(":tipo",$tipo);
        $res->bindValue(":senha",$senha);
        $res->execute();
        
         if($res->rowCount()>0){
            
           $Result = TRUE;
          
        return $Result;
            
        } else {
            $Result = FALSE;
            
             return $Result;
        }
        
        
        
        
        

        }
    
    function actualizarUtlizador($nome, $tipo, $senha, $id){
      
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
    
        
        function apagarUtlizador($id){
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
        
       
        function buscarUtlizador($senha){
       $admin = "Admin";
        $pdo =  conectar(); 
        $res = $pdo->prepare("SELECT Senha  FROM utilizador where Senha =:SH And  tipoUtilizador =:ADMIN");
        $res->bindValue(":SH",$senha);
        $res->bindValue(":ADMIN",$admin);
        $res->execute();
       
        if($res->rowCount()>0){
            
           $Result = TRUE;
          
        return $Result;
            
        } else {
            $Result = FALSE;
            
            
        }
        
        
        
      
        
    
        }
        
        
        
        
        
        
    
    }







?>