<!DOCTYPE html>
<html xmlns="http://www.w3.org/1999/xhtml">
<head>
    <meta charset="utf-8" />
    <meta name="viewport" content="width=device-width, initial-scale=1.0" />
    <title>estoque do infinito</title>
    <!-- BOOTSTRAP STYLES-->
    <link href="../assets/css/bootstrap.css" rel="stylesheet" />
    <!-- FONTAWESOME STYLES-->
    <link href="../assets/css/font-awesome.css" rel="stylesheet" />
    <!-- MORRIS CHART STYLES-->
    <link href="../assets/js/morris/morris-0.4.3.min.css" rel="stylesheet" />
    <!-- CUSTOM STYLES-->
    <link href="../assets/css/custom.css" rel="stylesheet" />
    <!-- GOOGLE FONTS-->
    <link href='http://fonts.googleapis.com/css?family=Open+Sans' rel='stylesheet' type='text/css' />

    <link rel="stylesheet" type="text/css" href="../../assets/semantic/semantic.min.css">
    <link rel="stylesheet" type="text/css" href="../../assets/style.css">
    <link href="../jquery/EXE3/exe3.css" rel="stylesheet" type="text/css" />
    <script src="../jquery/EXE3/https://ajax.googleapis.com/ajax/libs/jquery/3.3.1/jquery.min.js"></script>

</head>
<body>


<div id="wrapper">

    <nav class="navbar navbar-default navbar-cls-top " role="navigation" style="margin-bottom: 0">
        <span id="tamanhoicones">
        <a href="configuracoes.php" class="glyphicon glyphicon-cog" aria-hidden="true"></a>
        <a href="notificaçoes.php" class="glyphicon glyphicon-bell" aria-hidden="true"></a>
            </span>

        <div class="navbar-header">
            <button type="button" class="navbar-toggle" data-toggle="collapse" data-target=".sidebar-collapse">
                <span class="sr-only">Toggle navigation</span>
                <span class="icon-bar"></span>
                <span class="icon-bar"></span>
                <span class="icon-bar"></span>
            </button>
            <a class="navbar-brand" href="catalogo.php">Leaneth</a>
        </div>
        <div style="color: white;
padding: 15px 50px 5px 50px;
float: right;
font-size: 16px;"><a href="../../app/views/tela_inicio.html" class="btn btn-danger square-btn-adjust">Logout</a></div>
    </nav>
    <!-- /. NAV TOP  -->
    <nav class="navbar-default navbar-side" role="navigation">


        <div class="sidebar-collapse">
            <ul class="nav" id="main-menu">
                <li class="text-center">
                    <img src="../assets/img/find_user.png" class="user-image img-responsive"/>
                </li>



                <li>
                    <a href="#"><i class="glyphicon glyphicon-eye-open fa-3x" aria-hidden="true"></i>Visualizar<span class="fa arrow"></span></a>
                    <ul class="nav nav-second-level">
                        <li>
                            <a href="../perfil_admin/catalogo2.php">Catálogo</a>
                        </li>
                        <li>
                            <a href="visualizarpedidos.php">Histórico de pedidos</a>
                        </li>

                    </ul>
                </li>
            </ul>

        </div>

    </nav>
    <div id="page-wrapper" >



        <!-- /. PAGE INNER  -->
    </div>
    <!-- /. PAGE WRAPPER  -->
</div>
<!-- /. WRAPPER  -->
<!-- SCRIPTS -AT THE BOTOM TO REDUCE THE LOAD TIME-->
<!-- JQUERY SCRIPTS -->
<script src="../assets/js/jquery-1.10.2.js"></script>
<!-- BOOTSTRAP SCRIPTS -->
<script src="../assets/js/bootstrap.min.js"></script>
<!-- METISMENU SCRIPTS -->
<script src="../assets/js/jquery.metisMenu.js"></script>
<!-- MORRIS CHART SCRIPTS -->
<script src="../assets/js/morris/raphael-2.1.0.min.js"></script>
<script src="../assets/js/morris/morris.js"></script>
<!-- CUSTOM SCRIPTS -->
<script src="../assets/js/custom.js"></script>


</body>
</html>