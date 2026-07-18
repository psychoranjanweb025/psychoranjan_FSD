<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>
<body>
    <?php
$color = array("red","green","blue","black","white");
$key = array_search("blue",$color);
if($key !== false){
    echo " Element found at index:" . $key;
} else{
    echo "Element not found";
}
 ?>
</html>

<!--
http://localhost/classwork/page1.php
-->