<?php
/**
 * Created by PhpStorm.
 * User: franc
 * Date: 10-Nov-17
 * Time: 19:52
 */

  $nome=$_POST['nome'];
  $tipo=$_POST['tipo'];


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

    $sql = "INSERT INTO teste (nome, tipo)
VALUES ('$nome', '$tipo')";

    if (mysqli_query($conn, $sql)) {
        echo "New record created successfully";
    } else {
        echo "Error: " . $sql . "<br>" . mysqli_error($conn);
    }

    mysqli_close($conn);



//inserirUser('Ramalho Libele','ramalholibele@gmail.com','827153241','Moçambicana','ramalho')

?>