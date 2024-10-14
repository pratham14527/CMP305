
<html>
    <body>
        <?php
$uname=$_GET['uname'];
$pass=$_GET['pass'];
setcookie("a1",$uname);
session_start();

include "header.html";
$_SESSION['user']=$uname;
echo "<br>username is:".$uname;
echo "<br><br>";
echo "password is:".$pass;
if(!isset($_COOKIE['a1']))
{
    echo "Cookie is not found";
}
else{
    echo "<br><br>";
    echo "Cookie value is:".$_COOKIE['a1'];
}

echo "<br><br> session value is:".$_SESSION['user'];
echo "<br><br> session id".session_id();
include "footer.html";
?>
<a href="session2.php">go to next page </a>
</body>
</html>