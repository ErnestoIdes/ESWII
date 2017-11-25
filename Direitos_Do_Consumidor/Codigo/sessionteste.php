<?php
/**
 * Created by PhpStorm.
 * User: franc
 * Date: 19-Nov-17
 * Time: 13:58
 */

session_start();
?>
<!DOCTYPE html>
<html>
<body>

<?php
// Echo session variables that were set on previous page
echo "Favorite color is " . $_SESSION["nome"] . ".<br>";
echo "Favorite animal is " . $_SESSION["senha"] . ".";
?>

</body>
</html>