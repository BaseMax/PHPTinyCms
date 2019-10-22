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
if(isset($_POST['submit'])) {
    $subject=$_POST['subject'];
    $title=$_POST['title'];
    $description=$_POST['description'];
    $keyword=$_POST['keyword'];
    $text=$_POST['text'];
    $texts=$_POST['texts'];
    $db->insert("post", [
        "subject"=>$subject,
        "title"=>$title,
        "description"=>$description,
        "keyword"=>$keyword,
        "text"=>$text,
        "texts"=>$texts,
        ]);
}
?>
<form method="POST">
<b>Subject</b> :
<input name="subject"><br>
<b>Title / In head tag</b> :
<input name="title"><br>
<b>Description / In head tag</b> :
<input name="description"><br>
<b>Keyword / In head tag</b> :
<input name="keyword"><br>
<b>Text</b> :
<textarea name="text"></textarea><br>
<b>More Text</b> :
<textarea name="texts"></textarea><br>
<button name="submit">Submit</button>
</form>