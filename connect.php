<?php
/**
 * Created by PhpStorm.
 * User: qiaoer
 * Date: 16/9/12
 * Time: 15:23
 */
require_once 'config.php';
$conn = mysql_connect(HOST, USERNAME, PASSWORD);
if (!$conn) {
    echo mysql_error();
}
if (!mysql_select_db('my_test', $conn)) {
    echo mysql_error();
}
if (!mysql_query("set names utf8")) {
    echo mysql_error();
}
