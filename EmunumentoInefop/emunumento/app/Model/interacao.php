<?php

require_once '../Model/metodos.php';
 require_once '../Model/utilizadorDAO.php';
    require_once '../Model/utlilizador.php';
    require_once './conexao.php';
    
if (isset($_POST['logar'])):

   


    $nome = trim(strip_tags($_POST['nome']));
    $tipo = trim(strip_tags($_POST['tipo']));
    $senha = trim(strip_tags($_POST['senha']));


    $resultUtil = new logar();

    $resultUtil->setNome($nome);
    $resultUtil->setSenha($senha);
    $resultUtil->setTipo($tipo);
    $res = $resultUtil->vericifaLogin($resultUtil->getNome(), $resultUtil->getTipo(), $resultUtil->getSenha());

    if ($res == TRUE) {

        session_start();

        $_SESSION['nome'] = $resultUtil->getNome();
         $_SESSION['Admin'] = $tipo;

        header("Refresh:0, http://localhost/EmunumentoInefop/emunumento/production/index.php");
    } else {

        header("Refresh:0, http://localhost/EmunumentoInefop/emunumento/production/login.php#signin");
    }

endif;


if (isset($_POST['cadastrarUtil'])):


   
       $senhaUtilizar = filter_input(INPUT_POST, 'senhaUtilizar');

    $teste = new loga();

    $pegaAdmin = $teste->buscarUtlizador($senhaUtilizar);

    if ($pegaAdmin == TRUE) {

        echo  $nome = filter_input(INPUT_POST, 'nomeUtil');
     echo   $tipo = filter_input(INPUT_POST, 'tipoUtil');
     echo   $senha = filter_input(INPUT_POST, 'senhaUtil');

    echo    $res = $teste->criarUtilizador($nome, $tipo, $senha);

        if ($res == TRUE) {


             header("Location: http://localhost/EmunumentoInefop/emunumento/production/login.php#signin");
        } else {

            echo " <script> alert('Errro ao Criar Utilizador') </script>";
        }
    } else {


        echo " <script> alert(location='http://localhost/EmunumentoInefop/emunumento/production/login.php#signup') </script>";

        echo " location='http://localhost/EmunumentoInefop/emunumento/production/login.php#signup'";
    }

endif;



if (isset($_POST['cadastrarProvincia'])):


    require_once '../Model/provinciaDAO.php';
    require_once '../Model/provincias.php';


    $NomeProvincia = filter_input(INPUT_POST, 'NomeProvincia');
    $siglaProvincia = filter_input(INPUT_POST, 'siglaProvincia');

    $pegaProv = new provincia();

    $pegaProv->setNomeProvincia($NomeProvincia);
    $pegaProv->setSiglaProvincia($siglaProvincia);

    if (!empty($pegaProv->getNomeProvincia()) and ! empty($pegaProv->getSiglaProvincia())) {

        $resltProv = new provinciaDAO();

        $res = $resltProv->inserirProvincia($pegaProv->getNomeProvincia(), $pegaProv->getSiglaProvincia());


        if ($res == TRUE) {

            header('Location: http://localhost/EmunumentoInefop/emunumento/production/vistaProvincia.php?result = TREU');
        }
    }

endif;

//
//
// if(isset($_POST['cadastrarUtil'])):
//    
//                
//              $senhaUtilizar= addcslashes($_POST ['senhaUtilizar']);      
//                 
//                 
//                 $teste = new loga;
//
//                     $pegaAdmin = $teste->buscarUtlizador($senhaUtilizar);
//    
//        if($pegaAdmin == TRUE){
//       
//            $nome = filter_input(INPUT_POST, 'nome');
//             $tipo = filter_input(INPUT_POST, 'tipo');
//                 $senha = filter_input(INPUT_POST, 'senha'); 
//                 
//                     $res = $teste->criarUtilizador($nome, $tipo, $senha);
//                     
//        if($res==TRUE){
//            
//            
//         echo " location='http://localhost/EmunumentoInefop/emunumento/production/login.php#signup?resutl = $res'";
//            
//        }else{
//            
//             echo " <script> alert('Errro ao Criar Utilizador') </script>";
//        }
//       
//        } else {
//        
//        
//         echo " <script> alert(location='http://localhost/EmunumentoInefop/emunumento/production/login.php#signup') </script>";
//         
//         echo " location='http://localhost/EmunumentoInefop/emunumento/production/login.php#signup'";
//} 
//    
//endif;
//    
//

if (isset($_POST['cadastrarResponsavel'])):


    require_once '../Model/responsavelDAO.php';
    require_once '../Model/responsavel.php';


    $nomeResponsavel = filter_input(INPUT_POST, 'NomeResponsavel');
    $telefoneResponsavel = filter_input(INPUT_POST, 'telefoneResponsavel');
    $emailResponsavel = filter_input(INPUT_POST, 'emailResponsavel');

    $pegaRespo = new responsavel();

    $pegaRespo->setNomeResponsavel($nomeResponsavel);
    $pegaRespo->setEmailResponsavel($emailResponsavel);
    $pegaRespo->setTelefoneResponsavel($telefoneResponsavel);



    if (!empty($pegaRespo->getNomeResponsavel()) and ! empty($pegaRespo->getTelefoneResponsavel())and ! empty($pegaRespo->getEmailResponsavel())) {

        $pegaResponsavel = new responsavelDAO();

        $res = $pegaResponsavel->inserirResponsavel($pegaRespo->getNomeResponsavel(), $pegaRespo->getTelefoneResponsavel(), $pegaRespo->getEmailResponsavel());


        if ($res == TRUE) {

            header('Location: http://localhost/EmunumentoInefop/emunumento/production/vistaResponsavel.php?result = TREU');
        }
    }

endif;

if (isset($_POST['cadastrarProvincia'])):


    require_once '../Model/provinciaDAO.php';
    require_once '../Model/provincias.php';


    $NomeProvincia = filter_input(INPUT_POST, 'NomeProvincia');
    $siglaProvincia = filter_input(INPUT_POST, 'siglaProvincia');

    $pegaProv = new provincia();

    $pegaProv->setNomeProvincia($NomeProvincia);
    $pegaProv->setSiglaProvincia($siglaProvincia);

    if (!empty($pegaProv->getNomeProvincia()) and ! empty($pegaProv->getSiglaProvincia())) {

        $resltProv = new provinciaDAO();

        $res = $resltProv->inserirProvincia($pegaProv->getNomeProvincia(), $pegaProv->getSiglaProvincia());


        if ($res == TRUE) {

            header('Location: http://localhost/EmunumentoInefop/emunumento/production/vistaProvincia.php?result = TREU');
        }
    }

endif;


// Cadastrar Unidades Formativas


if (isset($_POST['cadastrarUnidades'])):

    require_once "./UinidadeFormativaDAO.php";
    require_once "./unidadeFormativa.php";
    require_once "./metodos.php";
    
    
    $NomeUnidade = filter_input(INPUT_POST, 'NomeUnidade');
    $contactoUnidade = filter_input(INPUT_POST, 'contactoUnidade');
    $siglaUnidade = filter_input(INPUT_POST, 'siglaUnidade');
    $enderecoUnidade = filter_input(INPUT_POST, 'enderecoUnidade');
    $emailUnidade = filter_input(INPUT_POST, 'emailUnidade');
    $provinciaUnidade = filter_input(INPUT_POST, 'provinciaUnidade');
    $nomeResponsavel = filter_input(INPUT_POST, 'nomeResponsavel');
    $nivelInst = filter_input(INPUT_POST, 'nivelInst');


    $pegarUnidade = new unidadeFormativa();

    $pegarUnidade->setNomeInsti($NomeUnidade);
    $pegarUnidade->setTelefonInst($contactoUnidade);
    $pegarUnidade->setEndereco($enderecoUnidade);
    $pegarUnidade->setEmail($emailUnidade);

    $pega = new metodos();
    
    $pegaIdProvincia = $pega->pegaIdProvincia($provinciaUnidade);
    $pegaIdResponsavel = $pega->pegaIdResponsavel($nomeResponsavel);
    
   

    if (!empty($NomeUnidade) and !empty($pegaIdProvincia)) {
        
        $inserirUnidade = new UnidadeDAO();
        
        
        
        $res = $inserirUnidade->inserirUnidadeFormativa($NomeUnidade, $contactoUnidade, $siglaUnidade,$nivelInst,$enderecoUnidade,$emailUnidade,$pegaIdProvincia,$pegaIdResponsavel);

        if ($res == TRUE) {


            header('Location:http://localhost/EmunumentoInefop/emunumento/production/vistaUnidadeFormativa.php');
        } else {

            echo " <script> alert('Errro ao Criar Utilizador') </script>";
        }
    
    }
endif;



//cadastrar Emunumentos



if (isset($_POST['cadastrarEmunumento'])):


    require_once '../Model/emunumentoDAO.php';
    require_once '../Model/emunumento.php';
    require_once '../Model/metodos.php';

    
    $unidadeFormativa = filter_input(INPUT_POST, 'unidadeFOrmativa');
    $nomeDescrição = filter_input(INPUT_POST, 'nomeDescrição');
    $modelo = filter_input(INPUT_POST, 'modelo');
    $capacidadeRAM = filter_input(INPUT_POST, 'capacidadeRAM');
    
    $capacidadeDiscoDuro = filter_input(INPUT_POST, 'capacidadeDiscoDuro');
    $tipoPorcessoador = filter_input(INPUT_POST, 'tipoPorcessoador');
    $frequenciaPorcessoador = filter_input(INPUT_POST, 'frequenciaPorcessoador');
    $estadoComputador = filter_input(INPUT_POST, 'estadoComputador');
    $dataEquisição = filter_input(INPUT_POST, 'dataEquisição');
    $quantidade = filter_input(INPUT_POST, 'quantidade');
    $preco = filter_input(INPUT_POST, 'preco');
    
    
    $data = strtotime($dataEquisição);
    
    $data = date('Y'."-".'m'."-".'d',$data);
    
    
    $pegaEmun = new emunumento();

     $pegaEmun->setDescricao($nomeDescrição);
     $pegaEmun->setModelo($modelo);
     $pegaEmun->setMemoriaram($capacidadeRAM);
     $pegaEmun->setMemoriahd($capacidadeDiscoDuro);
     $pegaEmun->setProcessador($frequenciaPorcessoador);
     $pegaEmun->setTipoProcessador($tipoPorcessoador);
     $pegaEmun->setData($data);
     $pegaEmun->setQtd($quantidade);
     $pegaEmun->setPreco($preco);
     
     $recebProv = new metodos();
             
     $recbIdUnidade = $recebProv->pegaIdUnidade($unidadeFormativa);



   if (!empty($pegaEmun->getDescricao()) and ! empty($pegaEmun->getModelo())and ! empty($pegaEmun->getQtd())) {

        $pegaEmunum = new emunumentoDAO();
        
       $imagen = "";

        $res = $pegaEmunum->inserirEmunumento($pegaEmun->getDescricao(),$pegaEmun->getModelo() , $pegaEmun->getMemoriaram(),$pegaEmun->getMemoriahd(),
                
              $pegaEmun->getProcessador(), $pegaEmun->getTipoProcessador(),$estadoComputador, $pegaEmun->getData(),$pegaEmun->getQtd(),
                $pegaEmun->getPreco(), $recbIdUnidade);


        if ($res == TRUE) {

             header('Location:http://localhost/EmunumentoInefop/emunumento/production/vistaEmunumento.php');
        } else {
            
        
            
            echo "Erro ao Inserir Dados";
        }
    }

endif;
