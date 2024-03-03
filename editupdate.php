<?php

// รับค่ามาจาก editform

require('conn.php');

// กำหนดตัวแปร และรับค่า จาก <input type="submit" value="แก้ไขข้อมูลบุคลากร" class="btnbtn-success">
$p_id = $_POST["p_id"];
$p_prefix = $_POST["p_prefix"];
$p_name = $_POST["p_name"];
$p_surname = $_POST["p_surname"];
$p_birthday = $_POST["p_birthday"];
$p_address = $_POST["p_address"];
$p_skill = $_POST["p_skill"];
$p_tel = $_POST["p_tel"];
$d_id = $_POST["d_id"];

//$sql = UPDATE ชื่อ Table SET ยกตัวอย่างเช่น ฐานข้อมูล,ตัวแปรที่เรากำหนด 
// นำข้อมูลทั้งหมด มาแก้ไขใน p_id ที่ถูกซ่อนไว้ ใน hidden บรรทัด 34 editform.php

$sql_Update = "UPDATE person 
SET p_prefix ='$p_prefix', p_name ='$p_name', p_surname='$p_surname', p_birthday='$p_birthday', 
p_address='$p_address', p_skill='$p_skill', p_tel='$p_tel', d_id=$d_id 
WHERE p_id=$p_id";



$result=mysqli_query($con,$sql_Update);

if($result){
    header("location:index.php");
    exit(0);
} else{
    echo"แก้ไขข้อมูลไม่ได้" . mysqli_error($con);
}

?>