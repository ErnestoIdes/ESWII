<?php
/**
 * Created by PhpStorm.
 * User: franc
 * Date: 10-Nov-17
 * Time: 19:52
 */




$nome=$_POST["nome"];
$email=$_POST["email"];
$telefone=$_POST["telefone"];
$nacionalidade=$_POST["nacionalidade"];
$tipo=$_POST["tipo"];
$senha=$_POST["senha"];

echo $nome;


     echo $tipo;
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

    $sql = "INSERT INTO usuario (nome, email, telefone,nacionalidade,tipo,senha)
VALUES ('$nome', '$email', '$telefone','$nacionalidade','$tipo','$senha')";

    if (mysqli_query($conn, $sql)) {
        echo "
        <script src=\"../vendor/jquery/jquery.min.js\">
</script>

<script>
    window.location.href=\"index.php\";
</script>
        ";
    } else {
        echo "Error: " . $sql . "<br>" . mysqli_error($conn);
    }

    mysqli_close($conn);


//inserirUser('Kisstimo Keypi','kisstimokeypi@gmail.com','842915205','Moçambicana','kisstimo')
?>
<!--<script src="../vendor/jquery/jquery.min.js">-->
<!--</script>-->
<!---->
<!--<script>-->
<!--    window.location.href="index.php";-->
<!--</script>-->


<html>

<body>


</body>
</html>

