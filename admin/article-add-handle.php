<?php
/**
 * Created by PhpStorm.
 * User: qiaoer
 * Date: 16/9/12
 * Time: 15:39
 */
require_once("../connect.php");

$title = $_POST['title'];
$author = $_POST['author'];
$description = $_POST['description'];
$content = $_POST['content'];
$dateline = time();

if (!isset($title) || empty($title)) {
    echo "<script>alert('标题不能为空');window.location.href='article-add.php';</script>";
    exit();
}
if (!isset($author) || empty($author)) {
    echo "<script>alert('作者不能为空');window.location.href='article-add.php';</script>";
    exit();
}
if (!isset($description) || empty($description)) {
    echo "<script>alert('描述不能为空');window.location.href='article-add.php';</script>";
    exit();
}
if (!isset($content) || empty($content)) {
    echo "<script>alert('内容不能为空');window.location.href='article-add.php';</script>";
    exit();
}

$query = "INSERT INTO article(title,author,description,content,dateline) VALUES('$title','$author','$description','$content',$dateline)";
//echo $query;
if (mysql_query($query)) {
    echo "<script>alert('文章发布成功!');window.location.href='article-add.php';</script>";
    exit();
} else {
    echo "<script>alert('文章发布失败!');window.location.href='article-add.php';</script>";
    exit();
}
