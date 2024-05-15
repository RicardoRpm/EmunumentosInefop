<?php
session_start();

require_once "../app/Model/metodos.php";
require_once "../app/Model/conexao.php";


$dados = new metodos();

if($_SESSION['nome']== ""):
    
    session_destroy();
    
    
     header("Refresh:0, http://localhost/EmunumentoInefop/emunumento/production/login.php#signin");
endif;

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
	
    <!-- bootstrap-progressbar -->
    <link href="../vendors/bootstrap-progressbar/css/bootstrap-progressbar-3.3.4.min.css" rel="stylesheet">
    <!-- JQVMap -->
    <link href="../vendors/jqvmap/dist/jqvmap.min.css" rel="stylesheet"/>
    <!-- bootstrap-daterangepicker -->
    <link href="../vendors/bootstrap-daterangepicker/daterangepicker.css" rel="stylesheet">

    <!-- Custom Theme Style -->
    <link href="../build/css/custom.min.css" rel="stylesheet">
    
    
    
    
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
    
   
    
     <!-- Bootstrap -->
    <link href="cdn.datatables.net/1.10.20/css/jquery.dataTables.min.css">
   


    <!-- Datatables -->
    
    <link href="../vendors/datatables.net-bs/css/dataTables.bootstrap.min.css" rel="stylesheet">
    <link href="../vendors/datatables.net-buttons-bs/css/buttons.bootstrap.min.css" rel="stylesheet">
    <link href="../vendors/datatables.net-fixedheader-bs/css/fixedHeader.bootstrap.min.css" rel="stylesheet">
    <link href="../vendors/datatables.net-responsive-bs/css/responsive.bootstrap.min.css" rel="stylesheet">
    <link href="../vendors/datatables.net-scroller-bs/css/scroller.bootstrap.min.css" rel="stylesheet">

    
    
    
    
    
    
    
  </head>

  <body class="nav-md">
    <div class="container body">
      <div class="main_container">
        <div class="col-md-3 left_col">
          <div class="left_col scroll-view">
            

           <?php include_once "../app/vista/menuEsquerdo.php"?>
            
        <!-- top navigation -->
       <div class="top_nav">
            <div class="nav_menu">
                <div class="nav toggle">
                  <a id="menu_toggle"><i class="fa fa-bars"></i></a>
                </div>
                <nav class="nav navbar-nav">
                <ul class=" navbar-right">
                  <li class="nav-item dropdown open" style="padding-left: 15px;">
                    <a href="javascript:;" class="user-profile dropdown-toggle" aria-haspopup="true" id="navbarDropdown" data-toggle="dropdown" aria-expanded="false">
                      <img src="images/img.jpg" alt=""><?php echo  $_SESSION['nome'];?>
                    </a>
                    <div class="dropdown-menu dropdown-usermenu pull-right" aria-labelledby="navbarDropdown">
                      
                        <a class="dropdown-item"  href="../app/Model/sairSistema.php"><i class="fa fa-sign-out pull-right"></i> Sair do Siatema</a>
                    </div>
                  </li>
  
                 
                   
                  </li>
                </ul>
              </nav>
            </div>
          </div>
        <!-- /top navigation -->

        <!-- page content -->
        <div class="right_col" role="main">
          <!-- top tiles -->
          <div class="row" style="display: inline-block;" >
          <div class="tile_count">
            <div class="col-md-2 col-sm-4  tile_stats_count">
              <span class="count_top red"><i class="fa fa-desktop"></i> PCs - Avariados</span>
              <div class="count red">
                  
                  <?php     
             $nomeEstado = "Avariado";
             $pdo=conectar();
             $dado = $pdo->prepare("SELECT SUM(qtd) AS qtd FROM `emun` WHERE estado='$nomeEstado'"); 
             $dado->execute(array($nomeEstado)); 
             
             while ($row = $dado->fetch(PDO::FETCH_ASSOC)) { 
             $qtdAvariado = $row["qtd"]; 

             
             } 
                    if ($qtdAvariado > 0) { 
                        
                        echo @$qtdAvariado;
                 
}  else {
    echo 0;
}
        
       
     
//                                    
//                                    
//                                    ?></div>
              <span class="count_bottom red"><i class="red">4% </i>Nas Unidades</span>
            </div>
            <div class="col-md-2 col-sm-4  tile_stats_count">
              <span class="count_top blue"><i class="fa fa-desktop"></i> PCs - Reparados</span>
              <div class="count blue">
                  
                   <?php     
             $nomeEstado = "Reparado";
             $pdo=conectar();
             $dado = $pdo->prepare("SELECT SUM(qtd) AS qtd FROM `emun` WHERE estado='$nomeEstado'"); 
             $dado->execute(array($nomeEstado)); 
             while ($row = $dado->fetch(PDO::FETCH_ASSOC)) { 
             $qtdReparado = $row["qtd"]; 

             
             } 
                    if ($qtdReparado > 0) { 
                        
                        echo @$qtdReparado;
                 
}  else {
    echo 0;
}


?>
                  
                  
                  
                  
              </div>
              <span class="count_bottom blue"><i class="green blue"><i class="fa fa-sort-asc blue"></i>3% </i> Nas Unidades</span>
            </div>
            <div class="col-md-2 col-sm-4  tile_stats_count">
              <span class="count_top green"><i class="fa fa-desktop"></i> PCs - Novos</span>
              <div class="count green">
                  
                  
                   <?php     
             $nomeEstado = "Novos";
             $pdo=conectar();
             $dado = $pdo->prepare("SELECT SUM(qtd) AS qtd FROM `emun` WHERE estado='$nomeEstado'"); 
             $dado->execute(array($nomeEstado)); 
             while ($row = $dado->fetch(PDO::FETCH_ASSOC)) { 
             $qtdNovos = $row["qtd"]; 

             
             } 
                    if ($qtdNovos > 0) { 
                        
                        echo    @$qtdNovos;

}  else {
    echo 0;
}


?>
                  
                  
                  
                  
              </div>
              <span class="count_bottom green"><i class="green"><i class="fa fa-sort-asc"></i>34% </i> From last Week</span>
            </div>
            <div class="col-md-2 col-sm-4  tile_stats_count">
              <span class="count_top green"><i class="fa fa-desktop"></i> PCs - Funcionais</span>
              <div class="count green">
                  
                    <?php     
             $nomeEstado = "Funcionais";
             $pdo=conectar();
             $dado = $pdo->prepare("SELECT SUM(qtd) AS qtd FROM `emun` WHERE estado='$nomeEstado'"); 
             $dado->execute(array($nomeEstado)); 
             while ($row = $dado->fetch(PDO::FETCH_ASSOC)) { 
             $qtdFuncionais = $row["qtd"]; 

             
             } 
                    if ($qtdFuncionais > 0) { 
                        
                        echo @$qtdFuncionais;
                 
}  else {
    echo 0;
}


?>
                  
                  
              </div>
              <span class="count_bottom green"><i class="red"><i class="fa fa-sort-desc green"></i>12% </i> From last Week</span>
            </div>
            <div class="col-md-2 col-sm-4  tile_stats_count">
              <span class="count_top blue"><i class="fa fa-desktop blue"></i> Total dos PCs</span>
              <div class="count blue">
                  
                         <?php     
             
             $pdo=conectar();
             $dado = $pdo->prepare("SELECT SUM(qtd) AS qtd FROM `emun`"); 
             $dado->execute(array($nomeEstado)); 
             while ($row = $dado->fetch(PDO::FETCH_ASSOC)) { 
             $qtdTotal = $row["qtd"]; 

             
             } 
                    if ($qtdTotal > 0) { 
                        
                        echo $qtdTotal;
                 
}  else {
    echo 0;
}


?>
          
                  
                 
                  
                  
                  
                  
              </div>
              <span class="count_bottom blue"><i class="blue"><i class="fa fa-sort-asc blue"></i>34% </i> From last Week</span>
            </div>
            <div class="col-md-2 col-sm-4  tile_stats_count">
              <span class="count_top"><i class="fa fa-institution"></i> Total Unidades</span>
              <div class="count">
                  
                  
                  
                  
                   <?php     
             
             $pdo=conectar();
             $dado = $pdo->prepare("SELECT COUNT(*) AS count FROM `instituicao`"); 
             $dado->execute(array($nomeEstado)); 
             while ($row = $dado->fetch(PDO::FETCH_ASSOC)) { 
             $qtdInstituicao = $row["count"]; 

             
             } 
                    if ($qtdTotal > 0) { 
                        
                        echo @$qtdInstituicao;
                 
}  else {
    echo 0;
}


?>
          
                  
                  
                  
                  
                  
                  
                  
              </div>
              <span class="count_bottom"><i class="green"><i class="fa fa-sort-asc"></i>100% </i> Formativas</span>
            </div>
          </div>
        </div>
          <!-- /top tiles -->

          <div class="row">
            <div class="col-md-12 col-sm-12 ">
              <div class="dashboard_graph">

                <div class="row x_title" align="center">
                  <div class="col-md-6" align="center">
                      <h3 align="center" style="color: blue">Gráficos sobre <small>o estado dos Computadores</small></h3>
                  </div>
                  
                </div>
                    <!-- Aria de Grafico -->
                <div class="col-md-9 col-sm-9 ">
                    
                  
                  <div id="chart_plot_01" class="demo-placeholder"></div>
                  
                   
                </div>
                     <!-- finalizar Grafico -->
                     
                     
                  <!-- Aria de Estatistica -->
                <div class="col-md-3 col-sm-3  bg-white">
                  <div class="x_title">
                      <strong style="color: blue">Estatistica dos PCs Por Pesentagem</strong>
                    <div class="clearfix"></div>
                  </div>

                  <div class="col-md-12 col-sm-12 ">
                    <div>
                      <p>Avariados <?php echo 100*$qtdAvariado/$qtdTotal." %"; ?></p>
                      <div class="">
                        <div class="progress progress_sm" style="width:100%;">
                            <div class="progress-bar bg-red" role="progressbar" data-transitiongoal=<?php echo 100*$qtdAvariado/$qtdTotal;?>></div>
                        </div>
                      </div>
                    </div>
                    <div>
                      <p>Reparados</p>
                      <div class="">
                        <div class="progress progress_sm" style="width: 100%;">
                          <div class="progress-bar bg-green" role="progressbar" data-transitiongoal=<?php echo 100*$qtdReparado/$qtdTotal?>></div>
                        </div>
                      </div>
                    </div>
                  </div>
                  <div class="col-md-12 col-sm-12 ">
                    <div>
                      <p>Novos</p>
                      <div class="">
                        <div class="progress progress_sm" style="width: 100%;">
                          <div class="progress-bar bg-green" role="progressbar" data-transitiongoal=<?php echo 100*$qtdNovos/$qtdTotal?>></div>
                        </div>
                      </div>
                    </div>
                    <div>
                      <p>Funcionais <?php echo 100*$qtdFuncionais/$qtdTotal." %"?></p>
                      <div class="">
                        <div class="progress progress_sm" style="width: 100%;">
                          <div class="progress-bar bg-green" role="progressbar" data-transitiongoal=<?php echo 100*$qtdFuncionais/$qtdTotal?>></div>
                        </div>
                      </div>
                    </div>
                  </div>

                </div>
                     <!-- Finalizar Aria de Estatistica -->
                     
                     
                <div class="clearfix"></div>
              </div>
            </div>

          </div>
          <br />

          
        <!-- Area da tebela -->

        
        <div class="col-md-12 col-sm-12 ">
                <div class="x_panel">
                  <div class="x_title">
                    <h2>Tabela das Unidades Formativas <small> A nivel de Luanda</small></h2>
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
                          <th>Provincias</th>
                          <th>PCs Avariados</th>
                         
                          
                          <th>PCs Funcionais</th>
                          <th>Totais</th>
                        </tr>
                      </thead>

                 <?php
        $pdo =  conectar(); 
        $res1 = $pdo->prepare("SELECT * FROM instituicao");
        $res1->execute();
                         
        while ($lista = $res1->fetch(PDO::FETCH_ASSOC) ):
            
           $intituicao = $lista['nomeInst'] ;
            $idinstituicao = $lista['idinstituicao'] ;               
             
             
        
        ?>
           
                      <tbody>
                      
                        <tr >
                            <td> <a class="dropdown-item" href="vistaInstituicao.php?pegaIdIsti=<?php echo $idinstituicao;?>&nomeInstitui=<?php echo $intituicao;?>"><?php
                            
                          
                                echo $lista['nomeInst'];
                               
                            
                                ?></a></td>
                          <td align="center">
                              <a class="dropdown-item" href="vistaInstituicao.php?pegaIdIsti=<?php echo $idinstituicao;?>&nomeInstitui=<?php echo $intituicao;?>">
                              <?php echo $dados->pegaPcAvariadosPorUnidade($idinstituicao);  ?></a></td>
                          <td align="center"><a class="dropdown-item" href="vistaInstituicao.php?pegaIdIsti=<?php echo $idinstituicao;?>&nomeInstitui=<?php echo $intituicao;?>"><?php echo $dados->pegaPcFuncionaisPorUnidade($idinstituicao);  ?></a></td>
                          
                          <td align="center"><a class="dropdown-item" href="vistaInstituicao.php?pegaIdIsti=<?php echo $idinstituicao;?>&nomeInstitui=<?php echo $intituicao;?>"><?php echo $dados->pegaPcTotalPorUnidade($idinstituicao);  ?></a></td>
                          
                        </tr>
                      </tbody>
                      
                      
                    </table>
                  </div>
                </div>
              </div>
            </div>
                </div>
              </div>

        
        
        
        
        <!-- fim area da tabela -->
      
        <!-- /footer content -->
      </div>
    </div>
 <?php
       
                           include_once "../app/vista/rodape.php";
       
       ?>
    <!-- jQuery -->
    <script src="../vendors/jquery/dist/jquery.min.js"></script>
    <!-- Bootstrap -->
    <script src="../vendors/bootstrap/dist/js/bootstrap.bundle.min.js"></script>
    <!-- FastClick -->
    <script src="../vendors/fastclick/lib/fastclick.js"></script>
    <!-- NProgress -->
    <script src="../vendors/nprogress/nprogress.js"></script>
    <!-- Chart.js -->
    <script src="../vendors/Chart.js/dist/Chart.min.js"></script>
    <!-- gauge.js -->
    <script src="../vendors/gauge.js/dist/gauge.min.js"></script>
    <!-- bootstrap-progressbar -->
    <script src="../vendors/bootstrap-progressbar/bootstrap-progressbar.min.js"></script>
    <!-- iCheck -->
    <script src="../vendors/iCheck/icheck.min.js"></script>
    <!-- Skycons -->
    <script src="../vendors/skycons/skycons.js"></script>
    <!-- Flot -->
    <script src="../vendors/Flot/jquery.flot.js"></script>
    <script src="../vendors/Flot/jquery.flot.pie.js"></script>
    <script src="../vendors/Flot/jquery.flot.time.js"></script>
    <script src="../vendors/Flot/jquery.flot.stack.js"></script>
    <script src="../vendors/Flot/jquery.flot.resize.js"></script>
    <!-- Flot plugins -->
    <script src="../vendors/flot.orderbars/js/jquery.flot.orderBars.js"></script>
    <script src="../vendors/flot-spline/js/jquery.flot.spline.min.js"></script>
    <script src="../vendors/flot.curvedlines/curvedLines.js"></script>
    <!-- DateJS -->
    <script src="../vendors/DateJS/build/date.js"></script>
    <!-- JQVMap -->
    <script src="../vendors/jqvmap/dist/jquery.vmap.js"></script>
    <script src="../vendors/jqvmap/dist/maps/jquery.vmap.world.js"></script>
    <script src="../vendors/jqvmap/examples/js/jquery.vmap.sampledata.js"></script>
    <!-- bootstrap-daterangepicker -->
    <script src="../vendors/moment/min/moment.min.js"></script>
    <script src="../vendors/bootstrap-daterangepicker/daterangepicker.js"></script>

    <!-- Custom Theme Scripts -->
    <script src="../build/js/custom.min.js"></script>
	
    
    
    
    
    
    
    

  
 
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

    
    
    
    
    
  </body>
</html>
