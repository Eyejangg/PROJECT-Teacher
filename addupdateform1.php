<?php

require('conn.php');

// รับค่าจาก addform.php
$s_prefix= $_POST["s_prefix"];
$s_name= $_POST["s_name"];
$s_surname= $_POST["s_surname"];
$s_major= $_POST["s_major"];
$s_number= $_POST["s_number"];
$s_user= $_POST["p_user"]; 
$s_pass= md5 ($_POST["p_pass"]);
$s_level= $_POST["s_level"]; 

//--------
// ประกาศตัวแปร การบันทึกข้อมูล
// ทำการแทรกข้อมูลลง studen และ เก็บข้อมูล ลงในฟิลล์ และ ฐานข้อมูล
$sql1="INSERT INTO studen(s_prefix,s_name,s_surname,s_major,s_number,s_user,s_pass,s_level) 
VALUE('$s_prefix','$s_name','$s_surname','$s_major','$s_number','$s_user','$s_pass','$s_level')";
//($con,$sql = string)
// เรียกใช้ ตัวแปร $con , และ $sql
$result=mysqli_query($con,$sql1);


// ทดสอบการรันคำสั่ง INSERT
if($result){
    header("location:index1.php");
    exit(0);
}else{
    echo mysqli_error($con);
}

