<?php
require_once("../class/student.php");

$stu = new Student();
$code = $_GET['cod'];
$stu->deleteStudent($code);
