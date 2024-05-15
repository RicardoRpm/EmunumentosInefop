<?php
require_once "../app/Model/conexao.php";
require_once "../app/Model/metodos.php";

session_start();



              $pegarecbNome= filter_input(INPUT_GET,'pegarecbNome');

              $pegadadosInstiu = new metodos();
              
              

              $recbdadosUnidade = $pegadadosInstiu->pegaUnidadeActu($pegarecbNome);
                                   
                              while ($lista = $recbdadosUnidade->fetch(PDO::FETCH_ASSOC) ): 
                             
                           $nomeInsti  =  $lista['nomeInst'] ;
                              
                                $sigla  =  $lista['sigla'] ;
                                $nivel  =  $lista['nivel'] ;
                                $endereco  =  $lista['endereco'] ;
                                $telefonInstitui  =  $lista['telefonInstitui'] ;
                                $email  =  $lista['email'] ;
                                $responsavel_idresponsavel  =  $lista['responsavel_idresponsavel'] ;
                              
                            endwhile;    
                         
                             
                            $recebNomeRespons = $pegadadosInstiu->pegaFuncionPorId($responsavel_idresponsavel);
                         
                                



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

    <title>Sistema de Gestão de Emunumento </title> 

    <!-- Bootstrap -->
    <link href="cdn.datatables.net/1.10.20/css/jquery.dataTables.min.css">
    <link href="../vendors/bootstrap/dist/css/bootstrap.min.css" rel="stylesheet">
    <!-- Font Awesome -->
    <link href="../vendors/font-awesome/css/font-awesome.min.css" rel="stylesheet">
    <!-- NProgress -->
    <link href="../vendors/nprogress/nprogress.css" rel="stylesheet">
    <!-- iCheck -->
    <link href="../vendors/iCheck/skins/flat/green.css" rel="stylesheet">
    <!-- Datatables -->
    
    <link href="../vendors/datatables.net-bs/css/dataTables.bootstrap.min.css" rel="stylesheet">
    <link href="../vendors/datatables.net-buttons-bs/css/buttons.bootstrap.min.css" rel="stylesheet">
    <link href="../vendors/datatables.net-fixedheader-bs/css/fixedHeader.bootstrap.min.css" rel="stylesheet">
    <link href="../vendors/datatables.net-responsive-bs/css/responsive.bootstrap.min.css" rel="stylesheet">
    <link href="../vendors/datatables.net-scroller-bs/css/scroller.bootstrap.min.css" rel="stylesheet">

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
        <!-- /top navigation -->

        <!-- page content -->
        <div class="right_col" role="main">
          <div class="">
            <div class="page-title">
              <div class="title_left">
                <h3>Users <small>Some examples to get you started</small></h3>
              </div>

              <div class="title_right">
                <div class="col-md-5 col-sm-5 col-xs-12 form-group pull-right top_search">
                  <div class="input-group">
                    <input type="text" class="form-control" placeholder="Search for...">
                    <span class="input-group-btn">
                      <button class="btn btn-secondary" type="button">Go!</button>
                    </span>
                  </div>
                </div>
              </div>
            </div>

            <div class="clearfix"></div>
            <div class="col-md-12 col-sm-12 ">
                <div class="x_panel">
                  <div class="x_title">
                    <h2>Dados da Unidades Formativas <small></small></h2>
                    <ul class="nav navbar-right panel_toolbox">
                      <li><a class="collapse-link"><i class="fa fa-chevron-up"></i></a>
                      </li>
                      <li class="dropdown">
                        <a href="#" class="dropdown-toggle" data-toggle="dropdown" role="button" aria-haspopup="true" aria-expanded="false"><i class="fa fa-wrench"></i></a>
                        <ul class="dropdown-menu" role="menu">
                          <li><a class="dropdown-item" href="#">Settings 1</a>
                          </li>
                          <li><a class="dropdown-item" href="#">Settings 2</a>
                          </li>
                        </ul>
                      </li>
                      <li><a class="close-link"><i class="fa fa-close"></i></a>
                      </li>
                    </ul>
                     <br /> <br />
                    <div class="clearfix" align="center">
                                            
                   
                        
                        
                         <div class="x_content bs-example-popovers">

                  <div class="alert alert-success alert-dismissible " role="alert">
                    <button type="button" class="close" data-dismiss="alert" aria-label="Close"><span aria-hidden="true">×</span>
                    </button>
                    <strong>Holy guacamole!</strong> Best check yo self, you're not looking too good.
                  </div>
                        
                        
                        
                      
                        
                        
                        
                    
                     </div>  
                  
                  
                  </div>
                   
                  <div class="x_content">
                    <br />
                    
                    
                    
                    
                    
                    <form id="demo-form2" data-parsley-validate class="form-horizontal form-label-left" method="POST" action="../app/Model/interacao.php">

                      <div class="item form-group">
                        <label class="col-form-label col-md-3 col-sm-3 label-align" for="first-name" >Nome da Instituição <span class="required">*</span>
                        </label>
                        <div class="col-md-6 col-sm-6 ">
                            <input type="text" id="first-name" name="NomeUnidade" required="required" class="form-control " value="<?php echo $pegarecbNome;?>">
                        </div>
                      </div>
                         
                        <div class="item form-group">
                        <label class="col-form-label col-md-3 col-sm-3 label-align" for="first-name" > Contacto: <span class="required">*</span>
                        </label>
                        <div class="col-md-6 col-sm-6 ">
                            <input type="text" id="first-name" name="contactoUnidade" required="required" class="form-control " value="<?php echo $telefonInstitui;?>">
                        </div>
                      </div>
                        <div class="item form-group">
                        <label class="col-form-label col-md-3 col-sm-3 label-align" for="first-name" > Sigla  <span class="required">*</span>
                        </label>
                        <div class="col-md-6 col-sm-6 ">
                            <input type="text" id="first-name" name="siglaUnidade" required="required" class="form-control " value="<?php echo $sigla;?>">
                        </div>
                      </div>
                        <div class="item form-group">
                        <label class="col-form-label col-md-3 col-sm-3 label-align" for="first-name" > Endereço <span class="required">*</span>
                        </label>
                        <div class="col-md-6 col-sm-6 ">
                            <input type="text" id="first-name" name="enderecoUnidade" required="required" class="form-control " value="<?php echo $endereco;?>">
                        </div>
                      </div>
                      <div class="item form-group">
                        <label class="col-form-label col-md-3 col-sm-3 label-align" for="last-name">Email <span class="required" ></span>
                        </label>
                        <div class="col-md-6 col-sm-6 ">
                          <input type="text" id="last-name" name="emailUnidade"  class="form-control" value="<?php echo $email;?>">
                        </div>
                          
                         
                      </div>
                        
                        
                        
                        <div class="item form-group">
                     <label class="col-form-label col-md-3 col-sm-3 label-align" for="last-name">Nivel das Unidades <span class="required">*</span>
                        </label>
                       <div class="col-md-6 col-sm-6 ">
                            
                                
                           <select id="last-name" class="form-control"  name="nivelInst">
                             
                            <option value="Nivel I"> Nivel I</option>
                            <option value="Nivel II"> Nivel II</option>
                            <option value="Nivel III"> Nivel III</option>
                          </select>
                          </div>
                      </div>
                        
                        
                        
                        
                        
                        
                        
                        
                        
                        
                           <div class="item form-group">
                     <label class="col-form-label col-md-3 col-sm-3 label-align" for="last-name">Provincia <span class="required">*</span>
                        </label>
                       <div class="col-md-6 col-sm-6 ">
                            
                                 <?php
                           
                           
                           $pdo =  conectar(); 
                            $res = $pdo->prepare("SELECT * FROM provincia");
                               $res->execute();
                           
                           
                           
                                        ?>
                           <select id="last-name" class="form-control"  name="provinciaUnidade" >
                              <?php
                              while ($lista = $res->fetch(PDO::FETCH_ASSOC) ):
                                  
                     
                            
                            ?>
                            <option value="<?php echo $lista['nomeProvinc']?>"> <?php
                            
                                echo $lista['nomeProvinc'];
                                
                            
                            ?></option>
                             <?php endwhile;?>
                          </select>
                          </div>
                      </div>
                        
                        
                         <div class="item form-group">
                        <label class="col-form-label col-md-3 col-sm-3 label-align" for="last-name">Responsavel <span class="required" ></span>
                        </label>
                        <div class="col-md-6 col-sm-6 ">
                          <input type="text" id="last-name" name="emailUnidade"  class="form-control" value="<?php echo $recebNomeRespons?>">
                        </div>
                          
                         
                      </div>
                        
                        
                       
                        
                        
                        
                      <div class="item form-group">
                      
                      </div>
                      <div class="ln_solid"></div>
                      <div class="item form-group">
                        <div class="col-md-6 col-sm-6 offset-md-3">
                        
						  <button class="btn btn-primary" type="reset">Eliminar</button>
                     
                  <input class="btn btn-primary submit" type="submit" value="Actualizar" name="cadastrarUnidades">
                
            
                        </div>
                      </div>

                    </form>
                  </div>
                </div>
              </div>
            </div>
           

          <div class="col-md-12 col-sm-12 ">
                <div class="x_panel">
                  <div class="x_title">
                    <h2>Listas das <small>Unidades Formativas</small></h2>
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
                    
                    <table id="datatable-buttons" class="table table-striped table-bordered" style="width:100%">
                      <thead>
                        <tr align="center">
                          <th>Nome das Unidades Formativas</th>
                          
                          <th>Endereço</th>
                          <th>Contacto</th>
                          <th>Provincia</th>
                          <th>Nome responsavel</th>
                        </tr>
                      </thead>


                      <tbody>
                        <?php
        $pdo =  conectar(); 
        $res1 = $pdo->prepare("SELECT * FROM instituicao");
        $res1->execute();
                         
        while ($lista = $res1->fetch(PDO::FETCH_ASSOC) ):
            
           
            
            
            $recb = $lista['provincia_idprovincia'];
            $recbNome = $lista['nomeInst'];
                          
                            $pdo =  conectar(); 
                            $res = $pdo->prepare("SELECT * FROM provincia WHERE  idprovincia  = :ID");
                            $res->bindValue(":ID",$recb);
                            $res->execute();

                            
             
             
        
        ?>
                        <tr>
                            <?php
                             
                                  
                           
                            
                            ?>
                          <td> 
                              <a class="collapse-link" href="actualizarUnidades.php?pegarecbNome=<?php echo $recbNome;?>">
                               <?php
                            
                          echo $lista['nomeInst'];
                          ?> 
                                
                            </a></td>
                          
                         
                          <td> <?php
                            
                                echo $lista['endereco'];
                                
                            
                            ?></td>
                          <td> <?php
                            
                                echo $lista['telefonInstitui'];
                                
                            
                            ?></td>
                          <td> <?php
                         
                          
                            while ($lista1 = $res->fetch(PDO::FETCH_ASSOC) ):     
                                          
                             $nomeRes = $lista1['nomeProvinc'];    
                          
                            
                        
                        
                             echo   $nomeRes
                            
                            ?></td>
                          
                           
                          
                           <td> <?php
                         
                           $recb = $lista['responsavel_idresponsavel'];
                          
                            $pdo =  conectar(); 
                            $res = $pdo->prepare("SELECT * FROM responsavel WHERE  idresponsavel  = :ID");
                            $res->bindValue(":ID",$recb);
                            $res->execute();
                            while ($lista1 = $res->fetch(PDO::FETCH_ASSOC) ):     
                                          
                             $nomeRes = $lista1['nomeRespon'];   
                            
                          
                            ?>
                        
                               <a class="collapse-link" href="actualizarUnidades.php"> <?php echo   $nomeRes
                            
                            ?></a>
                             </td>
                          
                          
                          
                          
                          
                          
                        </tr>
                        <?php
                               endwhile;
                                endwhile;
                               
                              endwhile;
                            
                            ?>
                      
                      </tbody>
                      
                       
                     
                      
                      
                    </table>
                                
                                
                  </div>
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
        <footer>
          <div class="pull-right">
            Gentelella - Bootstrap Admin Template by <a href="https://colorlib.com">Colorlib</a>
          </div>
          <div class="clearfix"></div>
        </footer>
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
    <!-- iCheck -->
    <script src="../vendors/iCheck/icheck.min.js"></script>
    <!-- Datatables -->
    <script src="../vendors/datatables.net/js/jquery.dataTables.min.js"></script>
    <script src="../vendors/datatables.net-bs/js/dataTables.bootstrap.min.js"></script>
    <script src="../vendors/datatables.net-buttons/js/dataTables.buttons.min.js"></script>
    
    <script src="../vendors/datatables.net-buttons-bs/js/buttons.bootstrap.min.js"></script>
    <script src="../vendors/datatables.net-buttons/js/buttons.flash.min.js"></script>
    <script src="../vendors/datatables.net-buttons/js/buttons.html5.min.js"></script>
    <script src="../vendors/datatables.net-buttons/js/buttons.print.min.js"></script>
    <script src="../vendors/datatables.net-fixedheader/js/dataTables.fixedHeader.min.js"></script>
    <script src="../vendors/datatables.net-keytable/js/dataTables.keyTable.min.js"></script>
    <script src="../vendors/datatables.net-responsive/js/dataTables.responsive.min.js"></script>
    <script src="../vendors/datatables.net-responsive-bs/js/responsive.bootstrap.js"></script>
    <script src="../vendors/datatables.net-scroller/js/dataTables.scroller.min.js"></script>
    <script src="../vendors/jszip/dist/jszip.min.js"></script>
    <script src="../vendors/pdfmake/build/pdfmake.min.js"></script>
    <script src="../vendors/pdfmake/build/vfs_fonts.js"></script>

    <!-- Custom Theme Scripts -->
    <script src="../build/js/custom.min.js"></script>

  </body>
</html>