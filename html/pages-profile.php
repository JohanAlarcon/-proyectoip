<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <!-- Tell the browser to be responsive to screen width -->
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <meta name="description" content="">
    <meta name="author" content="">
    <!-- Favicon icon -->
    <link rel="icon" type="image/png" sizes="16x16" href="../assets/images/favicon.png">
    <title>AdminWrap - Easy to Customize Bootstrap 4 Admin Template</title>
    <!-- Bootstrap Core CSS -->
    <link href="../assets/node_modules/bootstrap/css/bootstrap.min.css" rel="stylesheet">
    <!-- Custom CSS -->
    <link href="css/style.css" rel="stylesheet">
    <link href="css/hover.css" rel="stylesheet" media="all">
    <!-- You can change the theme colors from here -->
    <link href="css/colors/default.css" id="theme" rel="stylesheet">
    <!-- HTML5 Shim and Respond.js IE8 support of HTML5 elements and media queries -->
    <!-- WARNING: Respond.js doesn't work if you view the page via file:// -->
    <!--[if lt IE 9]>
    <script src="https://oss.maxcdn.com/libs/html5shiv/4.7.0/html5shiv.js"></script>
    <script src="https://oss.maxcdn.com/libs/respond.js/1.4.2/respond.min.js"></script>
<![endif]-->
</head>

<body class="fix-header card-no-border fix-sidebar">
    <!-- ============================================================== -->
    <!-- Preloader - style you can find in spinners.css -->
    <!-- ============================================================== -->
    <!-- ============================================================== -->
    <!-- Preloader - style you can find in spinners.css -->
    <!-- ============================================================== -->
    <div class="preloader">
        <div class="loader">
            <div class="loader__figure"></div>
            <p class="loader__label">IPECOl</p>
        </div>
    </div>
    <!-- ============================================================== -->
    <!-- Main wrapper - style you can find in pages.scss -->
    <!-- ============================================================== -->
    <div id="main-wrapper">
        <!-- ============================================================== -->
        <!-- Topbar header - style you can find in pages.scss -->
        <!-- ============================================================== -->
        <header class="topbar">
            <nav class="navbar top-navbar navbar-expand-md navbar-light">
                <!-- ============================================================== -->
                <!-- Logo -->
                <!-- ============================================================== -->
                <div class="navbar-header">
                    <a class="navbar-brand" href="dashboard.php">
                        <!-- Logo icon --><b>
                          
                    </a>
                </div>
                <!-- ============================================================== -->
                <!-- End Logo -->
                <!-- ============================================================== -->
                <div class="navbar-collapse">
                    <!-- ============================================================== -->
                    <!-- toggle and nav items -->
                    <!-- ============================================================== -->
                    <ul class="navbar-nav mr-auto">
                        <li class="nav-item"> <a class="nav-link nav-toggler hidden-md-up waves-effect waves-dark"
                                href="javascript:void(0)"><i class="fa fa-bars"></i></a> </li>


                    </ul>
                    <div class="container text-center">
                        <h4 class="text-*-center text-sm-center text-lg-center text-md-center" style="color: white;">
                            titulos
                        </h4>
                    </div>
                    <!-- ============================================================== -->
                    <!-- User profile and search -->
                    <!-- ============================================================== -->

                    <ul class="navbar-nav my-lg-0">
                        <!-- ============================================================== -->
                        <!-- Profile -->
                        <!-- ============================================================== -->
                        <!-- <li class="nav-item dropdown u-pro">
                            <a class="nav-link dropdown-toggle waves-effect waves-dark profile-pic" href="" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false"><img src="../assets/images/users/1.jpg" alt="user" class="" /> <span class="hidden-md-down">Mark Sanders &nbsp;</span> </a>
                        </li> -->
                    </ul>
                </div>
            </nav>
        </header>
        <!-- ============================================================== -->
        <!-- End Topbar header -->
        <!-- ============================================================== -->
        <!-- ============================================================== -->
        <!-- Left Sidebar - style you can find in sidebar.scss  -->
        <!-- ============================================================== -->
        <aside class="left-sidebar">
            <!-- Sidebar scroll-->
            <div class="scroll-sidebar">
                <!-- Sidebar navigation-->
                <nav class="sidebar-nav">
                    <ul id="sidebarnav">
                        <li> <a class="waves-effect waves-dark" href="index.html" aria-expanded="false"><i
                                    class="fa fa-tachometer"></i><span class="hide-menu">Dashboard</span></a>
                        </li>
                        <li> <a class="waves-effect waves-dark" href="pages-profile.html" aria-expanded="false"><i
                                    class="fa fa-table"></i><span class="hide-menu">Layout</span></a>
                        </li>
                    </ul>

                </nav>
                <!-- End Sidebar navigation -->
            </div>
            <!-- End Sidebar scroll-->
        </aside>
        <!-- ============================================================== -->
        <!-- End Left Sidebar - style you can find in sidebar.scss  -->
        <!-- ============================================================== -->
        <!-- ============================================================== -->
        <!-- Page wrapper  -->
        <!-- ============================================================== -->
        <div class="page-wrapper">
            <!-- ============================================================== -->
            <!-- Container fluid  -->
            <!-- ============================================================== -->
            <div class="container-fluid table-responsive">
                <!-- Start Page Content -->
                <!-- ============================================================== -->
               
                <div id="visual_success"></div>
                
                <!-- Row -->
                <table width="100%" class="table">
                    <!-- Column -->
                    <tr>
                    <td width="30%">
                        
                            <div class="card-body">
                                <form data-validation="true" action="clases/controlador.php" method="post" enctype="multipart/form-dat">
                                    <div class="item-content">
                                        <div class="image-upload">
                                            <label style="cursor: pointer;" for="file_upload" class="mt-5">
                                                <img src="" alt="" class="uploaded-image">
                                                <div class="h-100 mt-5">
                                                    <div class="dplay-tb justify-content-centerl">
                                                        <div class="dplay-tbl-cell">
                                                            <i class="fa fa-cloud-upload"></i>
                                                            <h5 style="color: #ea384d;" class="mt-2"><b>ARRASTRA Y
                                                                    SUELTA AQUI </b></h5>
                                                            <h6 class="mt-2 mb-70" style="color: #ea384d;"> EL LAYOUT
                                                            </h6>
                                                            <h6 class="mt-5 mb-70" style="color: #ea384d;">  </h6>
                                                        </div>
                                                    </div>
                                                </div>
                                                <!--upload-content-->
                                                <input data-required="image" type="file" name="archivo_subir"
                                                    id="archivo_subir" class="image-input"
                                                    data-traget-resolution="image_resolution" value="">
                                                   
                                            </label>
                                            <div class="form-group">
                                                <div class="col-sm-12">
                                                    <button class="btn btn-danger mt-2">CARGAR LAYOUT</button>
                                                </div>
                                            </div>
                                        </div>
                                    </div>
                                </form>
                            </div>
                      
                        <!-- Column -->
                        <!-- Column -->
                
                   </td>
                    
                    <td  width="70%" class="table-responsive">
                
                        <table class="table"  style="display:none" id="table">
                        
                        <tr>
                        
                            <td><h4>Quincena</h4></td>
                            <td id="quincena"></td>
                            <td><h4>Ejercicio:</h4></td>
                            <td id="ejercicio"></td>
                        
                        </tr>
                        <tr>
                        
                            <td><h4>#Trabajadores:</h4></td>
                            <td>&emsp;</td>
                            <td id="trabajadores"></td>
                            <td>&ensp;</td>
                        
                        </tr>
                         <tr>
                        
                            <td ><h4>Total Aportaciones</h4></td>
                            <td>&ensp;</td>
                            <td>&ensp;</td>
                            <td id="aportaciones"></td>
                        
                        </tr>
                        
                        <tr>
                        
                            <td style=" border-color: #e0273d"><h4>Salario Cotizacion</h4></td>
                            <td style=" border-color: #e0273d" id="salario"></td>
                            <td style=" border-color: #e0273d"><h4>Prestamos Personales</h4></td>
                            <td style=" border-color: #e0273d" id="prestamosPersonales"></td>
                            
                        </tr>
                        <tr>
                        
                            <td><h4>Aguinaldo</h4></td>
                            <td id="aguinaldo"></td>
                            <td><h4>Prestamos Hipotecarios</h4></td>
                            <td id="prestamosHipotecarios"></td>
                        
                        </tr>
                        <tr>
                        
                            <td><h4>Pensiones Extraordinarios</h4></td>
                            <td id="pensiones"></td>
                            <td><h4>Seguro Hipotecario</h4></td>
                            <td id="seguro"></td>
                        
                        </tr>
                        <tr>
                        
                            <td><h4>De la entidad</h4></td>
                            <td id="entidad"></td>
                            <td><h4>Hipotecario Especial</h4></td>
                            <td id="hipotecario"></td>
                        
                        </tr>
                  
                        </table>
          
                    </td>
                    
                    <td> <div id="visual_errores"></div> </td>
                
                </tr>
            </table>
                <!-- Row -->
                <!-- ============================================================== -->
                <!-- End PAge Content -->
                <!-- ============================================================== -->
            </div>
            <!-- =================================ACUSE, DESCARGAR LAYOUT FACTURAS.============================= -->
            <div class="container-fluid">
                <!-- Start Page Content -->
                <!-- ============================================================== -->
                <!-- Row -->
                <div class="row">
                    <div class="col-md-12">
                        <div class="card">
                            <div class="card-body">
                                <div class="container">
                                    <!-- Columns start at 50% wide on mobile and bump up to 33.3% wide on desktop -->
                                    <div class="row justify-content-md-center">
                                        <div class="col-6 col-md-4">
                                            <img src="../assets/images/icon-recibo.png" alt="Responsive image"
                                                class="  rounded mx-auto d-block text-center ">


                                            <strong><a class="efect-hover text-center mt-3" href="#"
                                                    style="color: #8d97ad;">Acuse de Recibo</a></strong>



                                        </div>
                                        <div class="col-6 col-md-4">
                                            <img src="../assets/images/icon-excel.png" alt="Responsive image"
                                                class=" imgExcel rounded mx-auto d-block text-center">

                                            <strong><a class="txtExcel text-center mt-3" href="#"
                                                    style="color: #8d97ad;">Descargar Layout</a></strong>

                                        </div>
                                        <div class="col-6 col-md-4">
                                            <img src="../assets/images/icon-facturas.png" alt="Responsive image"
                                                    class="  rounded mx-auto d-block text-center ">
                                           
                                            <strong><a class="efect-hover text-center mt-3" href="#"
                                                    style="color: #8d97ad;">Facturas</a></strong>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                    <!-- Column -->
                </div>
                <!-- Row -->
                <!-- ============================================================== -->
                <!-- End PAge Content -->
                <!-- ============================================================== -->
            </div>
            <!-- End Container fluid  -->
            <!-- ============================================================== -->
            <!-- ============================================================== -->
            <!-- footer -->
            <!-- ============================================================== -->
            <footer class="footer">
                © 2020 Ipecol
            </footer>
            <!-- ============================================================== -->
            <!-- End footer -->
            <!-- ============================================================== -->
        </div>
        <!-- ============================================================== -->
        <!-- End Page wrapper  -->
        <!-- ============================================================== -->


    </div>
    <!-- ============================================================== -->
    <!-- End Wrapper -->
    <!-- ============================================================== -->
    <!-- ============================================================== -->
    <!-- All Jquery -->
    <!-- ============================================================== -->
    <script src="../assets/node_modules/jquery/jquery.min.js"></script>
    <!-- Bootstrap tether Core JavaScript -->
    <script src="../assets/node_modules/bootstrap/js/popper.min.js"></script>
    <script src="../assets/node_modules/bootstrap/js/bootstrap.min.js"></script>
    <!-- slimscrollbar scrollbar JavaScript -->
    <script src="js/perfect-scrollbar.jquery.min.js"></script>
    <!--Wave Effects -->
    <script src="js/waves.js"></script>
    <!--Menu sidebar -->
    <script src="js/sidebarmenu.js"></script>
    <!--Custom JavaScript -->
    <script src="js/custom.min.js"></script>
    <!--Script para carga -->
    <script src="js/funciones.js"></script>
</body>

</html>