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
session_start();
if(isset($_SESSION['login']) && $_SESSION['login'] === true) {
    include "post.php";
}
else {
    header("Location: login.php");
    // exit();
}
