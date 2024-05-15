<div class="navbar nav_title" style="border: 0;" align="center">
                <a href="index.php" class="site_title"><i class="fa fa-bank"></i> <span>INEFOP</span></a>
            </div>

            <div class="clearfix"></div>

            <!-- menu profile quick info -->
            <div class="profile clearfix">
              <div class="profile_pic">
                <img src="images/INEFOP.jpg" alt="..." class="img-circle profile_img">
              </div>
              <div class="profile_info" align="center">
                  <span style="color: yellowgreen"> <strong>Logado <?php echo $_SESSION['Admin']." : "?></strong></span>
                  <br>
                  <strong> <span style="color: yellowgreen"> <?php echo  $_SESSION['nome'];?></span></strong>
              </div>
            </div>
            <!-- /menu profile quick info --
            

            <br /> 

<!-- sidebar menu -->
            <div id="sidebar-menu" class="main_menu_side hidden-print main_menu">
              <div class="menu_section">
                
                <ul class="nav side-menu">
                    <li><a href="../production/index.php"><i class="fa fa-home"></i> Paginal Principal </a>
                    <ul class="nav child_menu">
                      <li><a href="index.html">Dashboard</a></li>
                      <li><a href="index2.html">Dashboard2</a></li>
                      <li><a href="index3.html">Dashboard3</a></li>
                    </ul>
                  </li>
                  <li><a><i class="fa fa-edit"></i> Ferramentas <span class="fa fa-chevron-down"></span></a>
                    <ul class="nav child_menu">
                        <li><a href="../production/vistaProvincia.php">Cadastrar Provincia</a></li>
                        <li><a href="../production/vistaUnidadeFormativa.php">Cadastrar Unidades</a></li>
                        
                      <li><a href="../production/vistaEmunumento.php">Cadastrar Emunumento  </a></li>
                       <li><a href="../production/vistaResponsavel.php"> Cadastrar Responsavel  </a></li>
                       
                      
                      
                    </ul>
                  </li>
                  
                    <?php if ($_SESSION['Admin'] == "Admin" ) {
     
                            ?>
                  
                   <li><a><i class="fa fa-group"></i> Utilizadores <span class="fa fa-chevron-down"></span></a>
                    <ul class="nav child_menu">
                        
                        <li><a href="../app/Model/sairSistema.php"> Sair do Sistema  </a></li>
                      
                    </ul>
                  </li>
                   <?php } ?>
                    <li><a><i class="fa fa-power-off"></i> Sair do Sistema <span class="fa fa-chevron-down"></span></a>
                    <ul class="nav child_menu">
                        
                        <li><a href="../app/Model/sairSistema.php"> Sair do Sistema  </a></li>
                      
                    </ul>
                  </li>
                </ul>
              </div>
              

            </div>
            <!-- /sidebar menu -->

            <!-- /menu footer buttons -->
            
            <!-- /menu footer buttons -->
          </div>
        </div>
        