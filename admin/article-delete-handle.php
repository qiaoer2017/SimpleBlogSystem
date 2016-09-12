<?php
/**
 * Created by PhpStorm.
 * User: qiaoer
 * Date: 16/9/12
 * Time: 19:44
 */
require_once '../connect.php';
$id = $_GET['id'];
$query = "DELETE FROM article WHERE id=$id";

if (mysql_query($query)) {
    echo "<script>alert('文章删除成功!');window.location.href='article-add.php?';</script>";
    exit();
} else {
    echo "<script>alert('文章删除成功!');window.location.href='article-add.php?';</script>";
    exit();
}