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
include "../_init.php";
$exists=false;
if(isset($_GET['id'])) {
    $id=$_GET['id'];
    $count=$db->count("post", ["id"=>$id]);
    if($count > 0) {
        $exists=true;
    }
}
if($exists === false) {
    exit();
}
if(isset($_POST['submit'])) {
    $subject=$_POST['subject'];
    $title=$_POST['title'];
    $description=$_POST['description'];
    $keyword=$_POST['keyword'];
    $text=$_POST['text'];
    $texts=$_POST['texts'];
    $db->update("post", [
            "id"=>$id,
        ], [
            "subject"=>$subject,
            "title"=>$title,
            "description"=>$description,
            "keyword"=>$keyword,
            "text"=>$text,
            "texts"=>$texts,
        ]);
}
$post=$db->select("post", ["id"=>$id]);
?>
<form method="POST">
<b>Subject</b> :
<input name="subject" value="<?= $post["subject"] ?>"><br>
<b>Title / In head tag</b> :
<input name="title" value="<?= $post["title"] ?>"><br>
<b>Description / In head tag</b> :
<input name="description" value="<?= $post["description"] ?>"><br>
<b>Keyword / In head tag</b> :
<input name="keyword" value="<?= $post["keyword"] ?>"><br>
<b>Text</b> :
<textarea name="text"><?= $post["text"] ?></textarea><br>
<b>More Text</b> :
<textarea name="texts"><?= $post["texts"] ?></textarea><br>
<button name="submit">Submit</button>
</form>