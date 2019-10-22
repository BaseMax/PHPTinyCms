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
$posts=$db->selects("post");
?>
<table border="1">
<tr>
<td>ID</td>
<td>Subject</td>
<td>Text</td>
<td>Manage</td>
</tr>
<? foreach($posts as $post) { ?>
<tr>
<td>
<?= $post["id"] ?>
</td>
<td>
<?= $post["subject"] ?>
</td>
<td>
<p><?= $post["text"] ?></p>
</td>
<td>
<a href="../single.php?id=<?= $post["id"] ?>">READ</a>
&nbsp;&nbsp;
<a href="post_delete.php?id=<?= $post["id"] ?>">DELETE</a>
</td>
</tr>
<? } ?>
</table>

