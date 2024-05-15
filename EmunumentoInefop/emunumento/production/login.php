



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
    <link href="../vendors/bootstrap/dist/css/bootstrap.min.css" rel="stylesheet">
    <!-- Font Awesome -->
    <link href="../vendors/font-awesome/css/font-awesome.min.css" rel="stylesheet">
    <!-- NProgress -->
    <link href="../vendors/nprogress/nprogress.css" rel="stylesheet">
    <!-- Animate.css -->
    <link href="../vendors/animate.css/animate.min.css" rel="stylesheet">

    <!-- Custom Theme Style -->
    <link href="../build/css/custom.min.css" rel="stylesheet">
    
    
    
    
    
    
    
    
    
    
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

  <body class="login" style=" animation-direction: alternate">
    <div>
      <a class="hiddenanchor" id="signup"></a>
      <a class="hiddenanchor" id="signin"></a>

      <div class="login_wrapper">
        <div class="animate form login_form">
          <section class="login_content">
              <form action="../app/Model/interacao.php" method="POST">
              <h1>SIGEO</h1>
              <div>
                  <input type="text" class="form-control" placeholder="Digite o seu Nome" required="" name="nome" />
              </div>
              <div>
                  <input type="password" class="form-control" placeholder="Digite a Palavra Chave" required="" name="senha" />
              </div>
              
              
                        <div class="form-group row">
                       
                        <div class="col-md-9 col-sm-9 ">
                            <select class="select2_single form-control" tabindex="-1" name="tipo">
                           
                            <option >Admin</option>
                            <option >Técnico</option>
                            <option >Chefe do Departamento</option>
                           
                            
                          </select>
                        </div>
                      </div>
              
              
              <div>
                  <input class="btn btn-default submit" type="submit" value="Entrar" name="logar">
                
              </div>

              <div class="clearfix"></div>

              <div class="separator">
                <p class="change_link">Não Tens Conta?
                  <a href="#signup" class="to_register"> Crear Nova Conta </a>
                </p>

                <div class="clearfix"></div>
                <br />

                <div>
                  <div>
               
                  <p>©2020 Todos os Direitos Reservados. D.R.H - T.I</p>
                </div>
                </div>
              </div>
            </form>
          </section>
        </div>

        <div id="register" class="animate form registration_form">
            
            <?php 
            
            $pega = filter_input(INPUT_GET, 'resutl');
            if($pega==TRUE){ 
                
                echo "Dados Inseridos Com Sucesso";
            }
            ?>
            
            
            
          <section class="login_content">
            <form action="../app/Model/interacao.php" method="POST">
                <div>
                  <input type="password" class="form-control" placeholder="Digite a Palavra Chave do Admin" required="" name="senhaUtilizar" />
              </div>
              
              <div>
                  <input type="text" class="form-control" placeholder="Digite nome do Novo Utilizador" required="" name="nomeUtil" />
              </div>
              <div>
                  <input type="password" class="form-control" placeholder="Digite  a Senha do Novo Utilizador" required="" name="senhaUtil" />
              </div>
                        <div class="form-group row">
                       
                        <div class="col-md-9 col-sm-9 ">
                            <select class="select2_single form-control" tabindex="-1" name="tipoUtil">
                           
                            <option >Admin</option>
                            <option >Técnico</option>
                            <option >Chefe do Departamento</option>
                           
                            
                          </select>
                        </div>
                      </div>
              
              <div>
                  <button class="btn btn-default submit"><h6> </h6></button>
                
                   <div>
                  <input class="btn btn-default submit" type="submit" value="Criar Nova Conta" name="cadastrarUtil">
                
              </div>
                  
                  
                  
              </div>

              <div class="clearfix"></div>

              <div class="separator">
                <p class="change_link">
                    <a href="#signin" class="to_register"><h2><strong> Voltar ao Login </strong> </h2></a>
                </p>

                
                
                <div class="clearfix"></div>
                <br />

                <div>
               
                  <p>©2020 Todos Direitos Reselvados D.R.H - T.I</p>
                </div>
              </div>
            </form>
          </section>
        </div>
      </div>
    </div>
  </body>
</html>
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
	