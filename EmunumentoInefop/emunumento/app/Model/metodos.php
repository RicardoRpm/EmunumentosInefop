                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                       <?php
            


class metodos{
    
    //Este metodo serve para retornar uma provincia
    function pegaIdProvincia($nomeProvinc){
        
                            $pdo =  conectar(); 
                            $res = $pdo->prepare("SELECT * FROM provincia WHERE nomeProvinc  = :NOME");
                            $res->bindValue(":NOME",$nomeProvinc);
                            $res->execute();
        
                                 if($res->rowCount()>0){
            
            
                              
                            while ($lista = $res->fetch(PDO::FETCH_ASSOC) ):
                                          
                                          
                                      $nomeRes = $lista['idprovincia'];    
                                          
                          
                                      return  $nomeRes;
                            
                            
                            endwhile;
                          
                                     
                                   
            
         
            
                                         } else {
                                             
                                        return "Busca Não encontrada";
            
            
        }
        
        
    }                       
    
    
    //este metodo serve para retornar um responsavel
    
    function pegaIdResponsavel($nomeResp){
        
                             $pdo =  conectar(); 
                            $res = $pdo->prepare("SELECT * FROM responsavel WHERE nomeRespon  = :NOME");
                            $res->bindValue(":NOME",$nomeResp);
                            $res->execute();
        
                                 if($res->rowCount()>0){
            
            
                              
                            while ($lista = $res->fetch(PDO::FETCH_ASSOC) ):
                                          
                                          
                                      $nomeRes = $lista['idresponsavel'];    
                                          
                          
                            return  $nomeRes;
                            
                            
                            endwhile;
                          
                                     
                                   
            
         
            
                                         } else {
                                             
                                        return "Busca Não encontrada";
            
            
        }
        
        
    }                       
    
    
    
    
    //este metodo serve para retornar o Id da Unidades formativas
    
    function pegaIdUnidade($nomeUnidade){
        
                            $pdo =  conectar(); 
                            $res = $pdo->prepare("SELECT * FROM instituicao WHERE nomeInst  = :NOME");
                            $res->bindValue(":NOME",$nomeUnidade);
                            $res->execute();
        
                            
                                 if($res->rowCount()>0){
                         
                                 while ($lista = $res->fetch(PDO::FETCH_ASSOC) ):
                                          
                                          
                                      $IdRes = $lista['idinstituicao'];    
                                          
                          
                                      return  $IdRes;
                            
                            
                                 endwhile;
                          
                                     
                                   
            
         
            
                                         } else {
                                             
                                        return "Busca Não encontrada";
            
            
        }
        
        
    }      
    
    //função de contar computadores avariados
    
    
    function pegaPcAvariados($nomeEstado = "Avariado"){
        
            $pdo=conectar();
            $dado = $pdo->prepare("SELECT SUM(qtd) AS qtd FROM `emun` WHERE estado ='$nomeEstado'"); 
            $dado->execute(array($nomeEstado)); 
            
            while ($row = $dado->fetch(PDO::FETCH_ASSOC)) { 
            $qtdAvariado = $row["qtd"]; 
                } 
                if ($qtdAvariado > 0) { 
                    //return false;
                    return $qtdAvariado;
                   } else{
    
        
                                 
                       return " Contagem não efectuada";   
                                     
                                   
            
         
            
            
            
        }
        
        
    }      
    
    function pegaPcAvariadosPorUnidade($IdIntituicao){
        
        
            $nomeEstado = "Avariado";
            $pdo=conectar();
            $dado = $pdo->prepare("SELECT SUM(qtd) AS qtd FROM `emun` WHERE estado ='$nomeEstado' And 	instituicao_idinstituicao = '$IdIntituicao' "); 
            $dado->execute(array($nomeEstado)); 
            
            while ($row = $dado->fetch(PDO::FETCH_ASSOC)) { 
            $qtdAvariado = $row["qtd"]; 
                } 
                if ($qtdAvariado > 0) { 
                    //return false;
                    return $qtdAvariado;
                    
                   } else{
    
        
                                 
                       return 0;   
                                     
                                   
            
         
            
            
            
        }
        
        
    }      
   
    
    
    
    
    
    function pegaPcFuncionaisPorUnidade($IdIntituicao){
        
        
            $nomeEstado = "Funcionais";
            $pdo=conectar();
            $dado = $pdo->prepare("SELECT SUM(qtd) AS qtd FROM `emun` WHERE estado ='$nomeEstado' And 	instituicao_idinstituicao = '$IdIntituicao' "); 
            $dado->execute(array($nomeEstado)); 
            
            while ($row = $dado->fetch(PDO::FETCH_ASSOC)) { 
            $qtdAvariado = $row["qtd"]; 
                } 
                if ($qtdAvariado > 0) { 
                    //return false;
                    return $qtdAvariado;
                    
                   } else{
    
        
                                 
                       return 0;   
                                     
                                   
            
         
            
            
            
        }
        
        
    }      
    
    
    
    
    
    
    
    function pegaPcNovosPorUnidade($IdIntituicao){
        
        
            $nomeEstado = "Novos";
            $pdo=conectar();
            $dado = $pdo->prepare("SELECT SUM(qtd) AS qtd FROM `emun` WHERE estado ='$nomeEstado' And 	instituicao_idinstituicao = '$IdIntituicao' "); 
            $dado->execute(array($nomeEstado)); 
            
            while ($row = $dado->fetch(PDO::FETCH_ASSOC)) { 
            $qtdAvariado = $row["qtd"]; 
                } 
                if ($qtdAvariado > 0) { 
                    //return false;
                    return $qtdAvariado;
                    
                   } else{
    
        
                                 
                       return 0;   
                                     
                                   
            
         
            
            
            
        }
        
        
    } 
    
    
    
    
    
    
    
    
    
    
    
    
    
    
    
    
    function pegaPcTotalPorUnidade($IdIntituicao){
        
        
            $nomeEstado = "Funcionais";
            $pdo=conectar();
            $dado = $pdo->prepare("SELECT SUM(qtd) AS qtd FROM `emun` WHERE instituicao_idinstituicao = '$IdIntituicao' "); 
            $dado->execute(array($nomeEstado)); 
            
            while ($row = $dado->fetch(PDO::FETCH_ASSOC)) { 
            $qtdAvariado = $row["qtd"]; 
                } 
                if ($qtdAvariado > 0) { 
                    //return false;
                    return $qtdAvariado;
                    
                   } else{
    
        
                                 
                       return 0;   
                                     
                                   
            
         
            
            
            
        }
        
        
    }      
    
    
    
    function pegaPcFuncionais($nomeEstado = "Funcionais"){
        
            $pdo=conectar();
            $dado = $pdo->prepare("SELECT SUM(qtd) AS qtd FROM `emun` WHERE estado ='$nomeEstado'"); 
            $dado->execute(array($nomeEstado)); 
            
            while ($row = $dado->fetch(PDO::FETCH_ASSOC)) { 
            $qtdAvariado = $row["qtd"]; 
                } 
                if ($qtdAvariado > 0) { 
                    //return false;
                    return $qtdAvariado;
                   } else{
    
        
                                 
                       return " Contagem não efectuada";   
                                     
                                   
            
         
            
            
            
        }
        
        
    }      
    
    
     function pegaPcTotal(){
        
            $pdo=conectar();
             $dado = $pdo->prepare("SELECT SUM(qtd) AS qtd FROM `emun`"); 
             $dado->execute(); 
            
            while ($row = $dado->fetch(PDO::FETCH_ASSOC)) { 
                
            $qtdAvariado = $row["qtd"]; 
                } 
                if ($qtdAvariado > 0) { 
                    //return false;
                    return $qtdAvariado;
                   } else{
    
        
                                 
                       return " Contagem não efectuada";   
                                     
                                   
            
         
            
            
            
        }
        
        
    }    
    
    
    
    
    
    
    
   //lsita Unidades formativas pra fazer a actualização
    
     function pegaUnidadeActu($nomeUnidade){
        
                            $pdo =  conectar(); 
                            $res = $pdo->prepare("SELECT * FROM instituicao WHERE  nomeInst <> '$nomeUnidade'");
                            $res->execute();
        
                            
                                 if($res->rowCount()>0){
                    
                                      return  $res;
                            
         
                                         } else {
                                             
                                        return "Busca Não encontrada";
            
            
        }
        
        
    } 
    
    
    
     function pegaFuncionPorId($Id){
        
                   
        
        
                            $pdo =  conectar(); 
                            $res = $pdo->prepare("SELECT * FROM responsavel WHERE idresponsavel  = :ID");
                            $res->bindValue(":ID",$Id);
                            $res->execute();
        
                                 if($res->rowCount()>0){
            
            
                              
                            while ($lista = $res->fetch(PDO::FETCH_ASSOC) ):
                                          
                                          
                                      $nomeRes = $lista['nomeRespon'];    
                                          
                          
                            return  $nomeRes;
                            
                            
                            endwhile;
        
        
        
        
    } 
    
    
    
    
     }
    
    
    
}

//echo $recen =  pegaPcAvariados();


                ?>