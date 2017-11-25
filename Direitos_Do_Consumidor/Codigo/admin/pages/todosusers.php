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

    <title>Todos Usuarios</title>

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
        <?php include 'nav-default.php' ?>
    </div>

    <div id="page-wrapper">
        <div class="row">
            <div class="col-lg-12">
                <h1 class="page-header">Todos Usuarios</h1>



            </div>
            <!-- /.col-lg-12 -->
        </div>
        <!-- /.row -->
        <div class="row">
            <div class="col-lg-6 col-md-6">

                <div class="container">

                    <table class="table table-bordered">
                        <thead>
                        <tr>
                            <th>ID</th>
                            <th>Nome</th>
                            <th>E-mail</th>
                            <th>Telefone</th>
                            <th>Nacionalidade</th>
                            <th>Tipo</th>
                            <th>Estado</th>
                            <th>Senha</th>
                        </tr>
                        </thead>
                        <tbody>
                        <tr>
                            <?php

/**
 * Created by PhpStorm.
 * User: franc
 * Date: 12-Nov-17
 * Time: 14:28
 */

$servername = "localhost";
$username = "root";
$password = "";
$dbname = "dc";

// Create connection
$conn = mysqli_connect($servername, $username, $password, $dbname);
// Check connection
if (!$conn) {
    die("Connection failed: " . mysqli_connect_error());
}

$sql = "SELECT * FROM usuario";
$result = mysqli_query($conn, $sql);

if (mysqli_num_rows($result) > 0) {
    // output data of each row
    while($row = mysqli_fetch_assoc($result)) {
        echo "
       
         <tr>
                            <td>".$row["id"]."</td>
                            <td>".$row["nome"]."</td>
                            <td>".$row["email"]."</td>
                            <td>".$row["telefone"]."</td>
                            <td>".$row["nacionalidade"]."</td>
                            <td>".$row["tipo"]."</td>
                            <td>".$row["estado"]."</td>
                            <td>".$row["senha"]."</td>
                            
                        </tr>
        ";

    }
} else {
    echo "0 results";
}

mysqli_close($conn);
?>

                        </tr>
<!--                        <tr>-->
<!--                            <td>Mary</td>-->
<!--                            <td>Moe</td>-->
<!--                            <td>mary@example.com</td>-->
<!--                        </tr>-->
<!--                        <tr>-->
<!--                            <td>July</td>-->
<!--                            <td>Dooley</td>-->
<!--                            <td>july@example.com</td>-->
<!--                        </tr>-->
                        </tbody>
                    </table>
                </div>


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

