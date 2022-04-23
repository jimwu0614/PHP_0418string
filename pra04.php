<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>
<body>
<a href="index.html">回索引</a>
    <h1>尋找字串整合應用</h1>
    <article>
        <h3>尋找字串與HTML、css整合應用</h3>
        <div>
        給定一個句子，將指定的關鍵字放大
        “學會PHP網頁程式設計，薪水會加倍，工作會好找”
        請將上句中的 “程式設計” 放大字型或變色.
        </div>
    </article>
    <?php
    $str="學會PHP網頁程式設計，薪水會加倍，工作會好找";
    echo $str;
    echo"<BR>";
    $pos=mb_strpos($str,"程式設計");
    $str=mb_substr($str,0,$pos)
        ."<span style='font-size:2rem;color:red'>"
        ."程式設計"
        ."</span>"
        ."，薪水會加倍，工作會好找";
    echo $str;
    ?>
    <hr>
    <?php
    $str="學會PHP網頁程式設計，薪水會加倍，工作會好找";
    echo $str;
    echo"<BR>";
    $search="程式設計";
    $pos=mb_strpos($str,$search);
    $str=mb_substr($str,0,$pos)
        ."<span style='font-size:2rem;color:red'>"
        .$search
        ."</span>"
        ."，薪水會加倍，工作會好找";
    echo $str;
    ?>
</body>
</html>