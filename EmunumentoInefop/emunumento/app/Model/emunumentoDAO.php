<?php
        
        require_once "./conexao.php";
        
      class emunumentoDAO{
          
          
          
          
          function inserirEmunumento($Descricao,$Modelo, $Memoriaram,$Memoriahd,$Processador, $ipoProcessador,$estadoComputador, $Data,$Qtd,$Preco,$recbIdUnidade){

        $pdo =  conectar(); 
        $res = $pdo->prepare("INSERT INTO emun (descricao,modelo,memoriaram,memoriahd,processador,tipoProcessador,estado,data,qtd,preco,instituicao_idinstituicao ) VALUES (:descricao,:modelo,:memoriaram,:memoriahd,:processador,:tipoProcessador,:estadoComputador,:data,:qtd,:preco,:idUnidade)");
        $res->bindValue(":descricao",$Descricao);
        $res->bindValue(":modelo",$Modelo);
        $res->bindValue(":memoriaram",$Memoriaram);
        $res->bindValue(":memoriahd",$Memoriahd);
        $res->bindValue(":processador",$Processador);
        $res->bindValue(":tipoProcessador",$ipoProcessador);
        $res->bindValue(":estadoComputador",$estadoComputador);
        $res->bindValue(":data",$Data);
        $res->bindValue(":qtd",$Qtd);
        $res->bindValue(":preco",$Preco);
        $res->bindValue(":idUnidade",$recbIdUnidade);
   
        $res->execute();
        
         if($res->rowCount()>0){
            
           $Result = TRUE;
          
        return $Result;
            
        } else {
            $Result = FALSE;
            
             return $Result;
        }
        
        
        
        
        

        }
    
    function actualizarEmunumento($nome, $tipo, $senha, $id){
      
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
    
        
        function apagarEmunumento($id){
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
        
       
        function buscarEmunumento(){
       
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
   