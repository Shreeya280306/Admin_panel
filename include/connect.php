<?php
$obj = new mysqli("localhost","root","","student_project");

if($obj->connect_errno !=0){
    echo $obj->connect_error();
}

?>