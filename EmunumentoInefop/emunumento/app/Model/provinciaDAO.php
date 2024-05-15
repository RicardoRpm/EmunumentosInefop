<?php


require_once "./conexao.php";


    class provinciaDAO{
    
      
        function inserirProvincia($nome ,$sigla){

        $pdo =  conectar(); 
        $res = $pdo->prepare("INSERT INTO provincia (nomeProvinc , sigla ) VALUES (:nome, :sigla)");
        $res->bindValue(":nome",$nome);
        $res->bindValue(":sigla",$sigla);
        $res->execute();
        
         if($res->rowCount()>0){
            
           $Result = TRUE;
          
        return $Result;
            
        } else {
            $Result = FALSE;
            
             return $Result;
        }
        
        
        
        
        

        }
    
    function actualizarProvincia($nome, $tipo, $senha, $id){
      
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
    
        
        function apagarProvincia($id){
                           
            
                            $pdo =  conectar(); 
                            $res = $pdo->prepare("SELECT * FROM provincia WHERE  idprovincia  = :ID");
                            $res->bindValue(":ID",$id);
                            $res->execute();
        
                                 if($res->rowCount()>0){
            
            
                              
                            while ($lista = $res->fetch(PDO::FETCH_ASSOC) ):
                                          
                                          
                                      $nomeRes = $lista['nomeProvinc'];    
                                          
                          
                                      return  $nomeRes;
                            
                            
                            endwhile;
                          
                                     
                                   
            
         
            
                                         } else {
                                             
                                        return "Busca Não encontrada";
            
            
        }
        
  
        }
        
       
        function buscarProvincia($id){
       
         $pdo =  conectar(); 
                            $res = $pdo->prepare("SELECT * FROM provincia WHERE  idprovincia  = :ID");
                            $res->bindValue(":ID",$id);
                            $res->execute();
        
                                 if($res->rowCount()>0){
            
            
                              
                            while ($lista = $res->fetch(PDO::FETCH_ASSOC) ):
                                          
                                          
                                      $nomeRes = $lista['nomeProvinc'];    
                                          
                          
                                      return  $nomeRes;
                            
                            
                            endwhile;
                          
                                     
                                   
            
         
            
                                         } else {
                                             
                                        return "Busca Não encontrada";
            
            
        }
    
        }
        
        
        
        
        
        
    
    }







?>