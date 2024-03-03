<?php

require('conn.php');

// รับค่าจาก addform.php
$p_prefix= $_POST["p_prefix"];
$p_name= $_POST["p_name"];
$p_surname= $_POST["p_surname"];
$p_birthday= $_POST["p_birthday"];
$p_address= $_POST["p_address"];
$p_skill= $_POST["p_skill"];
$p_tel= $_POST["p_tel"];
$p_image= $_POST["p_image"];
$p_user= $_POST["p_user"]; // ส่วน login ทำการรับค่า 3 ค่านี้มาด้วยและกำหนดตัวแปร --
$p_pass= md5 ($_POST["p_pass"]);
$p_level= $_POST["p_level"];


//--------
// ประกาศตัวแปร การบันทึกข้อมูล
// ทำการแทรกข้อมูลลง person และ เก็บข้อมูล ลงในฟิลล์ และ ฐานข้อมูล
$sql="INSERT INTO person(p_prefix,p_name,p_surname,p_birthday,p_address,p_skill,p_tel,p_image,p_user,p_pass,p_level) 
VALUE('$p_prefix','$p_name','$p_surname','$p_birthday','$p_address','$p_skill','$p_tel','$p_image','$p_user','$p_pass','$p_level')";
//($con,$sql = string)
// เรียกใช้ ตัวแปร $con , และ $sql
$result=mysqli_query($con,$sql);


// ทดสอบการรันคำสั่ง INSERT
if($result){
    header("location:index.php");
    exit(0);
}else{
    echo mysqli_error($con);
}

