<?php
$data = $_POST;

$name = $avatar["name"];
$type = $avatar["type"];
$size = $avatar["size"];
$blacklist = array(".php", ".js", ".html");

if (isset($data["set_avatar"])) {
    $data[""] = $data[""];
}


?>
<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>

<body>

    <form action="/" method="post" enctype="multipart/form-data">
        <input type="file" name="avatar">
        <button type="submit" name="set_avatar">
            Загрузить
        </button>
    </form>
</body>

</html>