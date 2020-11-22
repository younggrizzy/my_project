<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <title>adminka</title>
    <link rel="stylesheet" type="text/css" href="styles.css">
</head>
<body>
<form enctype="multipart/form-data" action="__URL__" method="POST">
    <div class="admin">
    <input type="text" name="id"/>
    <br>
    <input type="text" name="title"/>
    <br>
    <input type="text" name="img"/>
    <br>
        <input type="hidden" name="MAX_FILE_SIZE" value="30000" />
        <input type="submit" value="save img" />
    <br>
    <textarea name="content" id="" cols="30" rows="10"></textarea>
    <br>
    <input type="text" name="author"/>
    <br>
    <input type="text" name="category"/>
    <br>
    <button type="submit">Save</button>
    </div>
</form>
</body>

<?php
if (!empty($_POST)){
    $sql = "INSERT INTO `pages` (`id`, `title`, `img`, `content`, `author`, `category`)
    VALUES ('{$_POST['id']}', '{$_POST['title']}', '{$_POST['img']}', '{$_POST['content']}', '{$_POST['author']}', '{$_POST['category']}')
";
    mysqli_query($connection, $sql);//не работает
}
if (isset($_POST['sumbit'])){
    move_uploaded_file($_FILES['file']['tmp_name'], "/uploads/".$_FILES['file']['name']);
}?>
