<?
/**
 *
 * @Name : PHPTinyCms
 * @Version : 1.0
 * @Programmer : Max
 * @Date : 2019-10-27
 * @Released under : https://github.com/BaseMax/PHPTinyCms/blob/master/LICENSE
 * @Repository : https://github.com/BaseMax/PHPTinyCms
 *
 **/
ob_start();
session_start();
if(isset($_POST['submit'])) {
$user=$_POST['user'];
$pass=$_POST['pass'];
if($user === "rez" && $pass === "0c45dg4ffg123vc1b23456d74dsdfsdf") {
    // print_r($_POST);
    $_SESSION['login']=true;
    header("Location: index.php");
}
}
?>
<form method="POST">
<b>User</b> :
<input name="user">
<br>
<b>Pass</b> :
<input name="pass" type="password">
<br>
<button name="submit">Send</button>
</form>
