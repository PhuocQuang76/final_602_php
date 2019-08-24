<!DOCTYPE html>
<html>
<head>
    <meta charset="utf-8 "/>
    <title>Success</title>
</head>
<body>
    <h1>Success</h1>
    <p>The student was added!</p>

    <?php
    include "../common.php";
    $file = 'bu_students.json';
    $str_data = file_get_contents($file);
    $json_data = json_decode($str_data,true);
    pr_dump($json_data['students']);

    ?>
</body>
</html>