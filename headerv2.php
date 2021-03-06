<!DOCTYPE html>
<html lang="es">
<head>
  <title>ADN</title>
  <meta charset="utf-8">
  <meta name="viewport" content="width=device-width, initial-scale=1.0, maximum-scale=1.0">
  <meta name="description" content="admin-themes-adn">
  <meta name="author" content="adn">
  <link rel="shortcut icon" href="favicon.png" type="image/png"> 
    <!--CSS.Custom-->
    <link href="EstilosADN/style.css" rel="stylesheet">
    <link href="EstilosADN/theme.css" rel="stylesheet">
    <link href="EstilosADN/ui.css" rel="stylesheet">
    <!--/CSS.Custom-->
   <!--CSS.Old-->
    <LINK href="EstilosADN/dis.css" rel="stylesheet" type="text/css">
    <link  href="EstilosADN/jquery-ui.css" rel="stylesheet" type="text/css">
    <link  href="EstilosADN/bootstrap.min.css" rel="stylesheet" type="text/css">
    <link  href="EstilosADN/bootstrap-theme.min.css" rel="stylesheet" type="text/css">
    <link href="EstilosADN/font-awesome.min.css" rel="stylesheet" type="text/css">
    <!--/CSS-Old--> 
</head>
<!-- BEGIN BODY -->
 
<body class="sidebar-top color-blue theme-sdtl bg-clean">
    <section>
      <!-- BEGIN SIDEBAR -->
      <div class="sidebar">
        <div class="logopanel" >
          <img src="imagenesADN/profil_page/friend8.jpg" class="img-responsive img-circle img-sm" id="user-picture">
           <div class="sidebar-footer clearfix" style="">
              <img src="imagenesADN/empresa.png" class="img-responsive p-t-10 p-r-10">
          </div>
     
        </div>
    
        <div class="sidebar-inner">
          <div class="sidebar-top small-img clearfix">
            <div class="user-image">
              <img src="imagenesADN/profil_page/friend8.jpg" class="img-responsive img-circle">
            </div>
            <div class="user-details">
              <h4>Nombre del usuario largo</h4>
              <div class="user-login">
                <button class="btn btn-xs btn-rounded" type="button">
                  <i class="online"></i> Puesto del Usuario
                </button>
              </div>
            </div>
        </div><!--/.sidebar-top small-img clearfix -->
          <div class="menu-title">
            <h5>
              <strong>23:30 HS | 14/05/15</strong>
              
            </h5> 
            <div class="pull-right menu-settings">
              <i class="icon-bell"></i>
            </div>
          </div>
        <ul class="nav nav-sidebar">   
              <li class="pull-left p-r-30" id ="logo-empresa"> 
                <img src="imagenesADN/empresa_bg.png" class="img-responsive p-t-10 p-r-10 p-l-10">
              </li> <!-- LOGO EMPRESA DESKTOP-->          
              <li class="tm active current-context">
                <a href="#"><i class="icon-home"></i><span>Inicio</span> <span class="fa arrow active"></span></a>
              </li>
              <li class="tm">
                <a href="#"><i class="fa fa-table"></i><span>Tablero de Control</span> <span class="fa arrow"></span></a>
              </li>
              <li class="tm">
                <a href="#"><i class="fa fa-share-alt"></i><span>Sistema de NIS</span> <span class="fa arrow"></span></a>
              </li>
              <li class="tm">
                <a href="#"><i class="fa fa-dashboard"></i><span>Dashboard</span> <span class="fa arrow"></span></a>
              </li>
               <li class="tm">
                <a href="#"><i class="fa fa-sitemap"></i><span>Hoja de Ruta</span> <span class="fa arrow"></span></a>
              </li>
              <li class="pull-right" id ="logo-empresa"> 
                <img src="imagenesADN/logo/logo-ADN.png" alt="ADN" class="img-responsive p-t-10 p-r-10">
              </li> <!-- LOGO EMPRESA DESKTOP-->
          </ul> <!-- /.nav nav-sidebar -->
        </div><!--/.sidebar-inner -->
      </div>
       <!-- END SIDEBAR -->
         <!-- BEGIN MAIN CONTENT -->
        <div class="main-content">
        <!-- BEGIN TOPBAR -->
         <div class="topbar">
          <div class="header-left">
            <div class="topnav deskt">
              <a class="menutoggle" href="#" data-toggle="sidebar-collapsed"><span class="menu__handle"><span>Menu</span></span></a>
                <ul class="nav nav-horizontal">
                   <li id="user-header" >
                       <a href="#">
                        <span class="username"><strong>Nombre del usuario</strong></span>
                       </a>     
                   </li>
                   <li id="user-header" style="margin-top:5px">
                     <div class="user-login m-10">
                       <i class="online"></i> 
                       <strong>Puesto del Usuario</strong>
                     </div>
                 </li>
                      <li id="user-header" style="margin-top:5px">
                     <div class="user-login m-10">
                     
                     </div>
                 </li>
              </ul>
            </div>
          </div>
          <div class="header-right">
            <ul class="header-menu nav navbar-nav">
              <!-- BEGIN LOGO-ADN-->
              <li class="dropdown p-t-10" id="logo-adn">
                 <i class="icon-bell "></i><span>23:30 HS | 14/05/15</span> 
              </li>
              <!-- END LOGO-ADN-->
              <!--CONFIGURACIONES -->
               <li class="dropdown" id="configuraciones">
                <a href="#" data-toggle="dropdown" data-hover="dropdown" data-close-others="true">
                <i class="icon-settings"></i>
                
                </a>
                <ul class="dropdown-menu">
                  <li>
                    <a href="#"><span>Menu 1</span></a>
                  </li>
                  <li>
                    <a href="#"> <span>Menu 2</span></a>
                  </li>
                </ul>
              </li>
              <!-- END-CONFIGURACIONES -->
              <!--AYUDA-->
              <li id="quickview-toggle ayuda">
                <a href="#">
                  <i class="fa fa-question-circle"></i> 
                </a>
              </li>
              <!-- END-AYUDA-->
              <!-- SALIR -->
              <li id="quickview-toggle salir">
                <a href="#">
                  <i class="icon-logout"></i> 
                </a>
              </li>
              <!-- END-SALIR-->

            </ul>
          </div>
          <!-- header-right -->
        </div>
        <!-- END TOPBAR -->
    