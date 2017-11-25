<?php
/**
 * Created by PhpStorm.
 * User: franc
 * Date: 03-Nov-17
 * Time: 10:52
 */
?>


<!DOCTYPE html>
<html lang="en">

<head>

    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <meta name="description" content="">
    <meta name="author" content="">

    <title>Painel Administartivo</title>

    <!-- Bootstrap Core CSS -->
    <link href="../vendor/bootstrap/css/bootstrap.min.css" rel="stylesheet">

    <script type="text/javascript" src="../vendor/bootstrap/js/bootstrap.min.js"></script>

    <!-- MetisMenu CSS -->
    <link href="../vendor/metisMenu/metisMenu.min.css" rel="stylesheet">

    <!-- Custom CSS -->
    <link href="../dist/css/sb-admin-2.css" rel="stylesheet">

    <!-- Morris Charts CSS -->
    <link href="../vendor/morrisjs/morris.css" rel="stylesheet">

    <!-- Custom Fonts -->
    <link href="../vendor/font-awesome/css/font-awesome.min.css" rel="stylesheet" type="text/css">

    <!-- HTML5 Shim and Respond.js IE8 support of HTML5 elements and media queries -->
    <!-- WARNING: Respond.js doesn't work if you view the page via file:// -->
    <!--[if lt IE 9]>
    <script src="https://oss.maxcdn.com/libs/html5shiv/3.7.0/html5shiv.js"></script>
    <script src="https://oss.maxcdn.com/libs/respond.js/1.4.2/respond.min.js"></script>
    <![endif]-->

</head>

<body>

<div id="wrapper">

    <!-- Navigation -->
    <div>
        <?php include 'nav-default.php'?>
    </div>

    <div id="page-wrapper">
        <div class="row">
            <div class="col-lg-12">
                <h1 class="page-header">Registar Novo Usuario</h1>



            </div>
            <!-- /.col-lg-12 -->
        </div>
        <!-- /.row -->
        <div class="row">
            <div class="col-lg-6 col-md-6">

                <form role="form" method="post" action="inserirUser.php">
                    <div class="form-group">
                        <label for="nome">Nome:</label>
                        <input type="text" class="form-control" id="nome" name="nome" required placeholder="Introduza Nome">
                    </div>
                    <div class="form-group">
                        <label for="email">Email:</label>
                        <input type="email" class="form-control" name="email" id="email" required placeholder="Introduza Email">
                    </div>
                    <div class="form-group">
                        <label for="telefone">Telefone:</label>

                        <input type="tel" class="form-control" id="telefone" name="telefone" required placeholder="Introduza Telefone">
                    </div>
                    <div class="form-group">
                            <label for="nacionalidade">Nacionalidade:</label>
                            <select class="form-control" id="nacionalidade" name="nacionalidade">
                                <option>Selecione Nacionalidade</option>
                                <option>Moçambicana</option>
                                <option>Não Moçambicana</option>
                            </select>
                    </div>
                    <div class="form-group">
                        <label for="tipo">Tipo:</label>
                        <select class="form-control" id="tipo" name="tipo">
                            <option>Selecione Tipo</option>
                            <option>Administrador</option>
                            <option>Usuário</option>
                        </select>
                    </div>
                    <div class="form-group">
                        <label for="senha">Senha:</label>
                        <input type="password" class="form-control" id="senhae" name="senha" required placeholder="Interoduza Senha">
                    </div>
                    <div class="form-group">
                        <label for="senhaconf">Confirme Senha:</label>
                        <input type="password" class="form-control" id="senhaconf" name="senhaconf" required placeholder="Confirme Senha">
                    </div>
                    <button type="submit" class="btn btn-default">Registar</button>
                </form>


                        </div>
                    </div>

            </div>



            </div>

    </div>
    <!-- /#page-wrapper -->

</div>
<!-- /#wrapper -->

<!-- jQuery -->
<script src="../vendor/jquery/jquery.min.js"></script>

<!-- Bootstrap Core JavaScript -->
<script src="../vendor/bootstrap/js/bootstrap.min.js"></script>

<!-- Metis Menu Plugin JavaScript -->
<script src="../vendor/metisMenu/metisMenu.min.js"></script>

<!-- Morris Charts JavaScript -->
<script src="../vendor/raphael/raphael.min.js"></script>
<script src="../vendor/morrisjs/morris.min.js"></script>
<script src="../data/morris-data.js"></script>

<!-- Custom Theme JavaScript -->
<script src="../dist/js/sb-admin-2.js"></script>

</body>

</html>

