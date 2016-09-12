<?php
/**
 * Created by PhpStorm.
 * User: qiaoer
 * Date: 16/9/12
 * Time: 19:26
 */
require_once("../connect.php");
$id = $_POST['id'];
$title = $_POST['title'];
$author = $_POST['author'];
$description = $_POST['description'];
$content = $_POST['content'];
$dateline = time();


if (!isset($title) || empty($title)) {
    echo "<script>alert('标题不能为空');window.location.href='article-modify.php?id=$id';</script>";
    exit();
}
if (!isset($author) || empty($author)) {
    echo "<script>alert('作者不能为空');window.location.href='article-modify.php?id=$id';</script>";
    exit();
}
if (!isset($description) || empty($description)) {
    echo "<script>alert('描述不能为空');window.location.href='article-modify.php?id=$id';</script>";
    exit();
}
if (!isset($content) || empty($content)) {
    echo "<script>alert('内容不能为空');window.location.href='article-modify.php?id=$id';</script>";
    exit();
}

$query = "UPDATE article SET title = '$title', author='$author',description='$description',content='$content',dateline=$dateline WHERE id=$id";
if (mysql_query($query)) {
    echo "<script>alert('文章修改成功!');window.location.href='article-modify.php?id=$id';</script>";
    exit();
} else {
    echo "<script>alert('文章修改失败!');window.location.href='article-modify.php?id=$id';</script>";
    exit();
}