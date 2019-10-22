<?
/**
 *
 * @Name : PHPTinyCms
 * @Version : 1.0
 * @Programmer : Max
 * @Date : 2019-10-25
 * @Released under : https://github.com/BaseMax/PHPTinyCms/blob/master/LICENSE
 * @Repository : https://github.com/BaseMax/PHPTinyCms
 *
 **/
include "../_init.php";
if(!isset($_GET['id'])) {
    exit();
}
$id=$_GET['id'];
$post=$db->select("post", ["id"=>$id]);
$db->delete("post", ["id"=>$id]);
header("Location: post.php");
?>
