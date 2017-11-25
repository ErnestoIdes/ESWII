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
        <tb>
         <tr>
                            <td>".$row["id"]."</td>
                            <td>".$row["nome"]."</td>
                            <td>".$row["email"]."</td>
                            <td>".$row["telefone"]."</td>
                            <td>".$row["nacionalidade"]."</td>
                            <td>".$row["estado"]."</td>
                            <td>".$row["tipo"]."</td>
                            <td>".$row["senha"]."</td>
                            
                        </tr>
</tb>
        ";
        echo "id: " . $row["id"]. " - Nome: " . $row["nome"]. " " . $row["email"]. "<br>";
    }
} else {
    echo "0 results";
}

mysqli_close($conn);
?>