<?php
/**
 * Created by PhpStorm.
 * User: franc
 * Date: 19-Nov-17
 * Time: 13:48
 */
// Start the session
session_start();
?>

<html>
<head>


</head>
<body>

<?php
$_SESSION["nome"] = "Francisco";
$_SESSION["senha"] = "francisco";
echo "Session variables are set.";

?>

</body>

</html>
