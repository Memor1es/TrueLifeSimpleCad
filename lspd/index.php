<html>
    <head>
        <meta charset="utf-8" />
        <meta name="viewport" content="width=device-width, initial-scale=1, maximum-scale=1" />
        <meta name="description" content="" />
        <meta name="author" content="" />
        <!--[if IE]>
        <meta http-equiv="X-UA-Compatible" content="IE=edge,chrome=1">
            <![endif]-->
            <title>LSPD ~ INICIO</title>
            <!-- BOOTSTRAP CORE STYLE  -->
            <link href="assets/css/bootstrap.css" rel="stylesheet" />
            <!-- FONT AWESOME STYLE  -->
            <link href="assets/css/font-awesome.css" rel="stylesheet" />
            <!-- CUSTOM STYLE  -->
            <link href="assets/css/style.css" rel="stylesheet" /> 
            <!-- GOOGLE FONT -->
            <link href='https://fonts.googleapis.com/css?family=Open+Sans' rel='stylesheet' type='text/css' />
    </head>

<?php
session_start();

if (isset($_SESSION['id'])) {
    echo '
        <body>
            <div class="navbar navbar-inverse set-radius-zero" >
                <div class="container">
                    <div class="navbar-header">
                        <button type="button" class="navbar-toggle" data-toggle="collapse" data-target=".navbar-collapse">
                            <span class="icon-bar"></span>
                            <span class="icon-bar"></span>
                            <span class="icon-bar"></span>
                        </button>
                        <a class="navbar-brand" href="index.php">
                            <img src="assets/img/lspdlogo.png" width=80 height=80/>
                        </a>
                    </div>
                    <div class="right-div">
                        <a href="logout.php" class="btn btn-danger pull-right">CERRAR SESIÓN</a>
                    </div>
                </div>
            </div>
            <section class="menu-section">
                <div class="container">
                    <div class="row ">
                        <div class="col-md-12">
                            <div class="navbar-collapse collapse ">
                                <ul id="menu-top" class="nav navbar-nav navbar-right">
                                    <li>
                                        <a href="index.php" class="menu-top-active">INICIO</a>
                                    </li>
                                    <li>
                                        <a href="add_criminal.php">NUEVO REGISTRO</a>
                                    </li>
                                </ul>
                            </div>
                        </div>
                    </div>
                </div>
            </section>
            <div class="content-wrapper">
                <div class="container">
                    <div class="row pad-botm">
                        <div class="col-md-12">
                            <h4 class="header-line">SISTEMA DE GESTIÓN DEL DPTO. POLICIAL DE LOS SANTOS.</h4>
                        </div>
                    </div>
                    <div class="row">
                        <div class="col-md-12">
                            <!-- Advanced Tables -->
                            <div class="panel panel-default">
                                <div class="panel-body">
                                    <div class="table-responsive">
                                        <table class="table table-striped table-bordered table-hover" id="dataTables-example">
                                            <thead>
                                                <tr>
                                                    <th>NOMBRE</th>
                                                    <th>CRIMEN</th>
                                                    <th>INFORMACIÓN Y SANCIÓN</th>
                                                    <th>BORRAR</th>
                                                </tr>
                                            </thead>
                                            <tbody>

                                    ';
    include("config.php");
    $reponse = $bdd->query('SELECT * FROM lspd');

    while ($data = $reponse->fetch()) {
?>
                                                   </td>
                                                    <td>
                                                        <?php
        echo $data['nombre'];
?>
                                                   </td>
                                                    <td class="center">
                                                        <?php
        echo $data['crimen'];
?>
                                                   </td>
                                                    <td class="center">
                                                        <?php
        echo $data['sancion'];
?>
                                                   </td>
                                                 <form action='delete_entry.php' method='post'>
                                                     <?php
        echo '<td>
                                                             <input type="submit" name="deleteItem" class="btn btn-danger" value="' . $data['id'] . '" />
                                                     </td>';
?>
                                                </form>
                                                </tr>
                                                <?php
    }
    $reponse->closeCursor();
    echo '

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
        <div class="col-md-6">
        </div>
    </div>
</div> </div><section class="footer-section">
<div class="container">
    <div class="row">
        <div class="col-md-12">
&copy; <a href="https://.truelife.es" target="_blank"  > TRUELIFE</a>
        </div>
    </div>
</div>
</section>
<script src="assets/js/jquery-1.10.2.js"></script> 
<script src="assets/js/bootstrap.js"></script>
<script src="assets/js/dataTables/jquery.dataTables.js"></script> 
<script src="assets/js/dataTables/dataTables.bootstrap.js"></script>
<script src="assets/js/custom.js"></script> </body>';

} else {
    header("Location: login.php");
}
?> 
</html>
