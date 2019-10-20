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
include "_init.php";
$posts=$db->selects("post");
?>
<? foreach($posts as $post) { ?>
<h1><a href="single.php?id=<?= $post["id"] ?>"><?= $post["subject"] ?></a></h1>
<p><?= $post["text"] ?></p>
<br>
<a href="single.php?id=<?= $post["id"] ?>">READ MORE</a>
<hr>
<? } ?>

