<?php
/**
 * Created by PhpStorm.
 * User: franc
 * Date: 19-Nov-17
 * Time: 15:22
 */
session_start();
include "bd.php";


$servername = "localhost";
$username = "root";
$password = "";
$dbname = "dc";

$email=$_POST['email'];
$senha=$_POST['senha'];
$senhaconf="";

// Create connection
$conn = mysqli_connect($servername, $username, $password, $dbname);
// Check connection
if (!$conn) {
    die("Connection failed: " . mysqli_connect_error());
}

$sql = "SELECT senha  FROM usuario WHERE email='$email'";
$result = mysqli_query($conn, $sql);

if (mysqli_num_rows($result) > 0) {
    // output data of each row
    while($row = mysqli_fetch_assoc($result)) {
       if($senha==$row["senha"]){
           $_SESSION['email']=$email;
           $_SESSION['senha']=$senha;
           $id=getID($email);
//           insertlog($email);

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
           $sql = "INSERT INTO log (email) VALUES ('$email')";
           if (mysqli_query($conn, $sql)) {
//        echo "New record created successfully";
           } else {
               echo "Error: " . $sql . "<br>" . mysqli_error($conn);
           }
           mysqli_close($conn);


           echo "
        <script src='../vendor/jquery/jquery.min.js'></script>
        <script>window.location.href='index.php';</script>
        ";
       } else{
           $aux=$_SESSION['try']++;
           $_SESSION['try']=$aux;
           echo "
    <script src='../vendor/jquery/jquery.min.js'></script>
        <script>window.location.href='login.php';</script>
    ";
       }

    }
} else {
    echo "nenhum Resultado Encontrado!";

}
if($senha==$senhaconf){
    echo "Sessao iniciada com sucesso!";
}

mysqli_close($conn);



?>