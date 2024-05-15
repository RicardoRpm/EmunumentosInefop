<?php


require_once "../app/Model/conexao.php";
session_start();

if($_SESSION['nome'] == ""):
    
    session_destroy();

   header("http://localhost/EmunumentoInefop/emunumento/production/login.php#signin");
endif;
    

$numero= filter_input(INPUT_GET,'result');
?>


<!DOCTYPE html>
<html lang="en">
  <head>
    <meta http-equiv="Content-Type" content="text/html; charset=UTF-8">
    <!-- Meta, title, CSS, favicons, etc. -->
    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1">
	   <link rel="icon" href="images/INEFOP.jpg" type="image/ico" />

      <title>Sistema de Gestão de Emunumento </title>


    <!-- Bootstrap -->
    <link href="../vendors/bootstrap/dist/css/bootstrap.min.css" rel="stylesheet">
    <!-- Font Awesome -->
    <link href="../vendors/font-awesome/css/font-awesome.min.css" rel="stylesheet">
    <!-- NProgress -->
    <link href="../vendors/nprogress/nprogress.css" rel="stylesheet">
    <!-- iCheck -->
    <link href="../vendors/iCheck/skins/flat/green.css" rel="stylesheet">
    <!-- bootstrap-wysiwyg -->
    <link href="../vendors/google-code-prettify/bin/prettify.min.css" rel="stylesheet">
    <!-- Select2 -->
    <link href="../vendors/select2/dist/css/select2.min.css" rel="stylesheet">
    <!-- Switchery -->
    <link href="../vendors/switchery/dist/switchery.min.css" rel="stylesheet">
    <!-- starrr -->
    <link href="../vendors/starrr/dist/starrr.css" rel="stylesheet">
    <!-- bootstrap-daterangepicker -->
    <link href="../vendors/bootstrap-daterangepicker/daterangepicker.css" rel="stylesheet">

    <!-- Custom Theme Style -->
    <link href="../build/css/custom.min.css" rel="stylesheet">
  </head>

  <body class="nav-md">
    <div class="container body">
      <div class="main_container">
        <div class="col-md-3 left_col">
          <div class="left_col scroll-view">
            

            <!-- sidebar menu -->
          <?php include_once "../app/vista/menuEsquerdo.php";?>
            <!-- /sidebar menu -->

            <!-- /menu footer buttons -->
            

        <!-- top navigation -->
        <?php include_once "../app/vista/top navegacao.php";?>
        <!-- /top navigation -->

        <!-- page content -->
         <div class="right_col" role="main">
          <div class="">
            <div class="page-title">
              <div class="title_left">
                <h3></h3>
              </div>

              <div class="title_right">
                <div class="col-md-5 col-sm-5  form-group pull-right top_search">
                  <div class="input-group">
                    <input type="text" class="form-control" placeholder="Search for...">
                    <span class="input-group-btn">
                      <button class="btn btn-default" type="button">Go!</button>
                    </span>
                  </div>
                </div>
              </div>
            </div>
            <div class="clearfix"></div>
            <div class="row">
              <div class="col-md-12 col-sm-12 ">
                <div class="x_panel">
                  <div class="x_title">
                    <h2>Cadastrar Computadores <small></small></h2>
                    <ul class="nav navbar-right panel_toolbox">
                      <li><a class="collapse-link"><i class="fa fa-chevron-up"></i></a>
                      </li>
                      
                     
                      </li>
                    </ul>
                     <br /> <br />
                    <div class="clearfix" align="center">
                                            
                    <?php
                    
                    
                   
                    
                    
                    
                    if($numero == TRUE){
                        
                        
                       
                        ?>
                        
                        
                         <div class="x_content bs-example-popovers">

                  <div class="alert alert-success alert-dismissible " role="alert">
                    <button type="button" class="close" data-dismiss="alert" aria-label="Close"><span aria-hidden="true">×</span>
                    </button>
                  
                  </div>
                        
                        
                        
                        <?php
                        
                        
                    } else {
                            
                        
                        
                        echo $numero;
                        ?>
                        
                         
                        
                    <?php     
                    }
                    
                    
                    
                    ?>
                        
                        
                        
                        
                    
                     </div>  
                  
                  
                  </div>
                   
                  <div class="x_content">
                    <br />
                    
                    
                    
                    
                    
                    <form id="demo-form2" data-parsley-validate class="form-horizontal form-label-left" method="POST" action="../app/Model/interacao.php">

                      <div class="item form-group">
                        <label class="col-form-label col-md-3 col-sm-3 label-align" for="first-name" >Descrição <span class="required">*</span>
                        </label>
                        <div class="col-md-6 col-sm-6 ">
                            <input type="text" id="first-name" name="nomeDescrição" required="required" class="form-control ">
                        </div>
                      </div>
                      <div class="item form-group">
                        <label class="col-form-label col-md-3 col-sm-3 label-align" for="last-name">Modelo <span class="required">*</span>
                        </label>
                        <div class="col-md-6 col-sm-6 ">
                          <input type="text" id="last-name" name="modelo" required="required" class="form-control">
                        </div>
                      </div>
                       <div class="item form-group">
                        <label class="col-form-label col-md-3 col-sm-3 label-align" for="last-name"> Capacidade RAM  <span class="required">*</span>
                        </label>
                        <div class="col-md-6 col-sm-6 ">
                          <input type="text" id="last-name" name="capacidadeRAM" required="required" class="form-control">
                        </div>
                      </div>
                     <div class="item form-group">
                        <label class="col-form-label col-md-3 col-sm-3 label-align" for="last-name"> Capacidade Disco Duro  <span class="required">*</span>
                        </label>
                        <div class="col-md-6 col-sm-6 ">
                          <input type="text" id="last-name" name="capacidadeDiscoDuro" required="required" class="form-control">
                        </div>
                      </div>
                     <div class="item form-group">
                        <label class="col-form-label col-md-3 col-sm-3 label-align" for="last-name"> Tipo Porcessoador <span class="required">*</span>
                        </label>
                        <div class="col-md-6 col-sm-6 ">
                          <input type="text" id="last-name" name="tipoPorcessoador" required="required" class="form-control">
                        </div>
                      </div>
                        
                        <div class="item form-group">
                        <label class="col-form-label col-md-3 col-sm-3 label-align" for="last-name"> Frequencia Porcessoador <span class="required">*</span>
                        </label>
                        <div class="col-md-6 col-sm-6 ">
                          <input type="text" id="last-name" name="frequenciaPorcessoador" required="required" class="form-control">
                        </div>
                      </div>
                     <div class="item form-group">
                        <label class="col-form-label col-md-3 col-sm-3 label-align" for="last-name"> Estado dos Computadores <span class="required">*</span>
                        </label>
                        <div class="col-md-6 col-sm-6 ">
                          
                            <select id="last-name" class="form-control"  name="estadoComputador" >
                              
                            <option value="Avariado"> Avariado </option>
                            <option value="Reparado"> Reparado </option>
                            <option value="Novos"> Novos </option>
                            <option value="Funcionais"> Funcionais </option>
                             
                            
                          </select>
                            
                            
                            
                            
                        </div>
                      </div>
                        
                       
                        <div class="field item form-group">
                      <label class="col-form-label col-md-3 col-sm-3  label-align">Data Equisição<span
                          class="required">*</span></label>
                      <div class="col-md-6 col-sm-6">
                        <input class="form-control" class='date' type="date" name="dataEquisição" required='required'></div>
                    </div>
                        
                        
                         <div class="field item form-group">
                      <label class="col-form-label col-md-3 col-sm-3  label-align">Quantidade <span
                          class="required">*</span></label>
                      <div class="col-md-6 col-sm-6">
                        <input class="form-control" type="number" class='number' name="quantidade"
                          data-validate-minmax="10,100" required='required'></div>
                    </div>
                        <div class="item form-group">
                        <label class="col-form-label col-md-3 col-sm-3 label-align" for="last-name"> Preço <span class="required">*</span>
                        </label>
                        <div class="col-md-6 col-sm-6 ">
                            <input type="number" id="last-name" name="preco"  class="form-control">
                        </div>
                      </div>
                        <div class="item form-group">
                     <label class="col-form-label col-md-3 col-sm-3 label-align" for="last-name">Unidade Formativa <span class="required">*</span>
                        </label>
                       <div class="col-md-6 col-sm-6 ">
                            
                                 <?php
                           
                           
                           $pdo =  conectar(); 
                            $res = $pdo->prepare("SELECT * FROM instituicao");
                               $res->execute();
                           
                           
                           
                                        ?>
                           <select id="last-name" class="form-control"  name="unidadeFOrmativa" >
                              <?php
                              while ($lista = $res->fetch(PDO::FETCH_ASSOC) ):
                                  
                     
                            
                            ?>
                            <option value="<?php echo $lista['nomeInst']?>"> <?php
                            
                                echo $lista['nomeInst'];
                                
                            
                            ?></option>
                             <?php endwhile;?>
                          </select>
                          </div>
                      </div>
                        
                      <div class="item form-group">
                       
                        
                      </div>
                      <div class="ln_solid"></div>
                      <div class="item form-group">
                        <div class="col-md-6 col-sm-6 offset-md-3">
                        
						  <button class="btn btn-primary" type="reset">Limpar</button>
                     
                  <input class="btn btn-primary submit" type="submit" value="Cadastrar Computadores" name="cadastrarEmunumento">
                
            
                        </div>
                      </div>

                    </form>
                  </div>
                </div>
              </div>
            </div>
                
                
                
                
                
             
                <!-- tabela do controlo dos Computadores-->
                
             <div class="col-md-12 col-sm-12 ">
                <div class="x_panel">
                  <div class="x_title">
                    <h2>Listas dos <small>Computadores nas Unidades</small></h2>
                    <ul class="nav navbar-right panel_toolbox">
                      <li><a class="collapse-link"><i class="fa fa-chevron-up"></i></a>
                      </li>
                      <li class="dropdown">
                        <a href="#" class="dropdown-toggle" data-toggle="dropdown" role="button" aria-expanded="false"><i class="fa fa-wrench"></i></a>
                        <div class="dropdown-menu" aria-labelledby="dropdownMenuButton">
                            <a class="dropdown-item" href="#">Settings 1</a>
                            <a class="dropdown-item" href="#">Settings 2</a>
                          </div>
                      </li>
                      <li><a class="close-link"><i class="fa fa-close"></i></a>
                      </li>
                    </ul>
                    <div class="clearfix"></div>
                  </div>
                  <div class="x_content">
                      <div class="row">
                          <div class="col-sm-12">
                            <div class="card-box table-responsive">
                    
                    <table id="datatable-buttons" class="table table-striped table-bordered" style="width:100%" align="center">
                      <thead align="center">
                        <tr>
                          <th>Nome das Unidades Formativas</th>
                          <th>Tipo de Computadores</th>
                          <th>Modelo</th>
                           <th>Capacidade de Memoria</th>
                            <th>Tipo de Processador</th>
                         
                          <th>Quantidade</th>
                        </tr>
                      </thead>


                      <tbody align="center">
                        <?php
        $pdo =  conectar(); 
        $res1 = $pdo->prepare("SELECT * FROM emun");
        $res1->execute();
                         
        while ($lista = $res1->fetch(PDO::FETCH_ASSOC) ):
            
            $recb = $lista['instituicao_idinstituicao'];
                          
                            $pdo =  conectar(); 
                            $res = $pdo->prepare("SELECT * FROM instituicao WHERE  idinstituicao  = :ID");
                            $res->bindValue(":ID",$recb);
                            $res->execute();

         
             
             
        
        ?>
                        <tr align="center">
                            <?php
                             
                                  
                           
                            
                            ?>
                          <td> <?php
                            
                               while ($lista1 = $res->fetch(PDO::FETCH_ASSOC) ):     
                                          
                             $nomeRes = $lista1['nomeInst'];    
                          
                            
                        
                        
                             echo   $nomeRes
                                
                            
                            ?></td>
                          <td> <?php
                            
                                echo $lista['descricao'];
                                
                            
                            ?></td>
                          <td> <?php
                            
                                echo $lista['modelo'];
                                
                            
                            ?></td>
                          <td> <?php
                            
                                echo $lista['memoriaram'];
                                
                            
                            ?></td>
                          <td> <?php
                            
                                echo $lista['tipoProcessador'];
                                
                            
                            ?></td>
                          <td> <?php
                         
                          echo $lista['qtd'];
                            
                            
                            ?></td>
                          
                           
                        </tr>
                        
                      
                      </tbody>
                      
                       <?php
                               endwhile;
                               
                              endwhile;
                            
                            ?>
                     
                      
                      
                    </table>
                                
                                
                  </div>
                </div>
              </div>
            </div>
                </div>
              </div>
                
          </div>
        </div>
              
                 
        <!-- /page content -->

        <!-- footer content -->
       <?php
       
                           include_once "../app/vista/rodape.php";
       
       ?>
        <!-- /footer content -->
      </div>
    </div>

    <!-- jQuery -->
    <script src="../vendors/jquery/dist/jquery.min.js"></script>
    <!-- Bootstrap -->
   <script src="../vendors/bootstrap/dist/js/bootstrap.bundle.min.js"></script>
    <!-- FastClick -->
    <script src="../vendors/fastclick/lib/fastclick.js"></script>
    <!-- NProgress -->
    <script src="../vendors/nprogress/nprogress.js"></script>
    <!-- bootstrap-progressbar -->
    <script src="../vendors/bootstrap-progressbar/bootstrap-progressbar.min.js"></script>
    <!-- iCheck -->
    <script src="../vendors/iCheck/icheck.min.js"></script>
    <!-- bootstrap-daterangepicker -->
    <script src="../vendors/moment/min/moment.min.js"></script>
    <script src="../vendors/bootstrap-daterangepicker/daterangepicker.js"></script>
    <!-- bootstrap-wysiwyg -->
    <script src="../vendors/bootstrap-wysiwyg/js/bootstrap-wysiwyg.min.js"></script>
    <script src="../vendors/jquery.hotkeys/jquery.hotkeys.js"></script>
    <script src="../vendors/google-code-prettify/src/prettify.js"></script>
    <!-- jQuery Tags Input -->
    <script src="../vendors/jquery.tagsinput/src/jquery.tagsinput.js"></script>
    <!-- Switchery -->
    <script src="../vendors/switchery/dist/switchery.min.js"></script>
    <!-- Select2 -->
    <script src="../vendors/select2/dist/js/select2.full.min.js"></script>
    <!-- Parsley -->
    <script src="../vendors/parsleyjs/dist/parsley.min.js"></script>
    <!-- Autosize -->
    <script src="../vendors/autosize/dist/autosize.min.js"></script>
    <!-- jQuery autocomplete -->
    <script src="../vendors/devbridge-autocomplete/dist/jquery.autocomplete.min.js"></script>
    <!-- starrr -->
    <script src="../vendors/starrr/dist/starrr.js"></script>
    <!-- Custom Theme Scripts -->
    <script src="../build/js/custom.min.js"></script>
	
  </body>
</html>
