<?php
/**
 * Created by PhpStorm.
 * User: franc
 * Date: 20-Nov-17
 * Time: 03:49
 */

$servername = "localhost";
$username = "root";
$password = "";
$dbname = "dc";

//   function insertlog($email){
//    $servername = "localhost";
//    $username = "root";
//    $password = "";
//    $dbname = "dc";
//    // Create connection
//    $conn = mysqli_connect($servername, $username, $password, $dbname);
//// Check connection
//    if (!$conn) {
//        die("Connection failed: " . mysqli_connect_error());
//    }
//    $sql = "INSERT INTO log (email) VALUES ('$email')";
//    if (mysqli_query($conn, $sql)) {
////        echo "New record created successfully";
//    } else {
//        echo "Error: " . $sql . "<br>" . mysqli_error($conn);
//    }
//    mysqli_close($conn);
//}


   function getNome($email){

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

       $sql = "SELECT nome FROM usuario WHERE email='$email'";
       $result = mysqli_query($conn, $sql);

       if (mysqli_num_rows($result) > 0) {
           // output data of each row
           while($row = mysqli_fetch_assoc($result)) {
               return $row["nome"];
           }
       } else {
           return "0 results";
       }
       mysqli_close($conn);
   }

   //Get Id by email
function getID($email){

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

    $sql = "SELECT id FROM usuario WHERE email='$email'";
    $result = mysqli_query($conn, $sql);

    if (mysqli_num_rows($result) > 0) {
        // output data of each row
        while($row = mysqli_fetch_assoc($result)) {
            return $row["id"];
        }
    } else {
        return "0 results";
    }
    mysqli_close($conn);
}
  function paragrafico(){
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

      $sqlD = "SELECT * FROM denuncias";
      $sqlQ = "SELECT * FROM questoes";
      $sqlR = "SELECT * FROM reclam";
      $sqlU = "SELECT * FROM usuario";

      $d=mysqli_num_rows(mysqli_query($conn,$sqlD));
      $q=mysqli_num_rows(mysqli_query($conn,$sqlQ));
      $r=mysqli_num_rows(mysqli_query($conn,$sqlR));
      $u=mysqli_num_rows(mysqli_query($conn,$sqlU));
$lista=[$d,$q,$r,$u];
     return $lista;
      mysqli_close($conn);

  }

?>