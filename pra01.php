<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>PHP字串函式介紹</title>
</head>
<body>
    <a href="index.html">回索引</a>
    <H1>常用字串函式</H1>
    <h3>substr() / mb_substr()</h3>
    <ul>
        <li>substr() - 用在英文系統單字元字集</li>
        <li>mb_substr() - 用在多文系統雙字元字集(multiple byte)</li>
    </ul>
    <h1>字串取代</h1>
    <article>
        <h3>字串取代</h3>
        <div>將”aaddw1123”改成”*********”</div>

    </article>
<?php
$password="aaddw1123";
// str_replace();
$password=str_replace("a","",$password);
$password=str_replace("d","*",$password);

// $strlen=mb_strlen($password);
// $password=str_repeat("*",$strlen);
echo $password;
?>

</body>
</html>