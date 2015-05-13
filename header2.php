<!DOCTYPE html>
<html lang="es">
 <title>ADN</title>
<head>
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
 
<body class="theme-sltd color-blue bg-clean">
    <section>
       <!-- BEGIN SIDEBAR -->
       <div class="sidebar">
        <!-- BEGIN LOGO-EMPRESA-->
         <div class="logopanel">
            <img src="imagenesADN/empresa.png" class="img-responsive img-rounded p-l-20">
         </div>
        <!-- END LOGO-EMPRESA-->
         <div class="sidebar-inner">
             <div class="sidebar-top big-img">
               <div class="user-image">
                 <img src="imagenesADN/profil_page/friend8.jpg" class="img-responsive img-circle">
               </div>
           
               <h4>Nombre del usuario</h4>
               <div class="dropdown user-login">
                 <button class="btn btn-xs dropdown-toggle btn-rounded" type="button" data-toggle="dropdown" data-hover="dropdown" data-close-others="true" data-delay="300">
                   <i class="online"></i><span>Puesto</span> 
                 </button>
               </div>
             </div>

      
         <ul class="nav nav-sidebar">             
               <li class="tm nav-parent active current-context">
                 <a href=""><i class="icon-home"></i><span>Inicio</span> <span class="fa arrow active"></span></a>
               </li>
               <li class="tm nav-parent">
                 <a href="#"><i class="fa fa-table"></i><span>Tablero de Control</span> <span class="fa arrow"></span></a>
               </li>
               <li class="tm nav-parent">
                 <a href="#"><i class="fa fa-share-alt"></i><span>Sistema de NIS</span> <span class="fa arrow"></span></a>
               </li>
               <li class="tm nav-parent">
                 <a href="#"><i class="fa fa-dashboard"></i><span>Dashboard</span> <span class="fa arrow"></span></a>
               </li>
                <li class="tm nav-parent">
                 <a href="#"><i class="fa fa-sitemap"></i><span>Hoja de Ruta</span> <span class="fa arrow"></span></a>
               </li>
               
               
             </ul>

             <div class="sidebar-widgets">
               <!-- SIDEBAR WIDGET -->
             </div>
             <div class="sidebar-footer clearfix">
                 <!-- QUICK ACCESS -->
             </div>
         </div>
       </div>
       <!-- END SIDEBAR -->
        <!-- BEGIN MAIN CONTENT -->
        <div class="main-content">
           <!-- BEGIN TOPBAR -->
        <div class="topbar">
          <div class="header-left">
            <div class="topnav">
              <a class="menutoggle" href="#" data-toggle="sidebar-collapsed"><span class="menu__handle"><span>Menu</span></span></a>
            </div>
          </div>
          <div class="header-right">
            <ul class="header-menu nav navbar-nav">
              <!-- BEGIN USER-->
              <li class="dropdown" id="logo-adn">
                <a href="#"  data-close-others="true">
                <img src="imagenesADN/logo/logo-white.png" alt="ADN" class="img-responsive" >
                </a>
              </li>
              <!-- END USER-->
              <!-- BEGIN  CONFIGURACIONES -->

               <li class="dropdown" id="configuraciones">
                <a href="#" data-toggle="dropdown" data-hover="dropdown" data-close-others="true">
                <i class="icon-settings"></i>
                <span >Configuraciones</span>
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
              <!-- END  CONFIGURACIONES -->
              <!-- SALIR -->
              <li id="quickview-toggle"><a href="#"><i class="icon-logout"></i> Salir</a></li>
            </ul>
          </div>
          <!-- header-right -->
        </div>
        <!-- END TOPBAR -->
       