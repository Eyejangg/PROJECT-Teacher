<?php

require('conn.php');
// ตรวจสอบว่ามีการส่งไฟล์รูปภาพเข้ามาหรือไม่
if(isset($_FILES['p_image'])) {
    // สร้างตัวแปรเก็บข้อมูลของไฟล์รูปภาพ
    $file_name = $_FILES['p_image']['name'];
    $file_tmp = $_FILES['p_image']['tmp_name'];
    $file_type = $_FILES['p_image']['type'];

    // ย้ายไฟล์รูปภาพ ไปยัง โฟลเดอร์ ที่ต้องการเก็บ "image/"
    move_uploaded_file($file_tmp, "image/" . $file_name);

    // เก็บชื่อไฟล์รูปภาพลงในตัวแปร $p_image 
    $p_image = $file_name;
} else {
    // ถ้าไม่ได้ส่งไฟล์รูปภาพเข้ามา ให้เก็บค่าเป็นค่าว่าง
    $p_image = "";
}
// กำหนดตัวแปรของเรา 
$p_id=$_GET["p_id"];
// เรียกใช้ข้อมูล person WHERE p_id=$p_id";
$sql_select="SELECT * FROM person WHERE p_id=$p_id";
// ดึงข้อมูลออกมาใช้
$result=mysqli_query($con,$sql_select);
$row = mysqli_fetch_assoc($result);

?>


<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>แก้ไขข้อมูลบุคลากร</title>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.1.3/dist/css/bootstrap.min.css" 
    rel="stylesheet" integrity="sha384-1BmE4kWBq78iYhFldvKuhfTAU6auU8tT94WrHftjDbrCEXSU1oBoqyl2QvZ6jIW3" crossorigin="anonymous">
    <link rel="stylesheet" type="text/css" href="stylesBG.css">

</head>
<body>

<div class="header">
<div class="container">

<div class="container my-3"> <!-- ปรับขนาด container คลุมด้วย <div> -->
    <h2 class="text-left">แก้ไขข้อมูลบุคลากร</h2>
    <hr>
    <form action="editupdate.php" method="POST">  <!-- ส่ง ไป update.php -->
    <input type="hidden" value="<?php echo $row["p_id"]; ?>" name="p_id"> <!-- KEY = PRIMARY KEY หลัก / ยิงข้อมูลตัวนี้ไปใน editupddate เพื่อให้แก้ไขได้-->
    

    <div class="form-group col-4"> <!-- ปรับขนาด col ภายใต้ form-group -->
    <label for="p_prefix">คำนำหน้าชื่อ:</label>
<select name="p_prefix" class="form-control" required>
            <!-- เลือก p_prefix เท่ากับ== นาย จะให้ echo SELECTED ขึ้นมา-->
            <option value="นาย" <?php if ($row["p_prefix"] == "นาย") {
                                echo "SELECTED";
                              } ?>>นาย</option>
          <option value="นาง" <?php if ($row["p_prefix"] == "นาง") {
                                echo "SELECTED";
                              } ?>>นาง</option>
          <option value="นางสาว" <?php if ($row["p_prefix"] == "นางสาว") {
                                echo "SELECTED";
                                } ?>>นางสาว</option>


</select><br> <!--  VALUE = ค่าที่ส่งออกมาในฐานข้อมูล-->

    <div class = "form-group">
        <label for="p_name">ชื่อ</label>
        <input type="text" name="p_name" class="form-control" value="<?php echo $row["p_name"]?>"><br>
    </div>

    <div class = "form-group">
    <label for="p_surname">นามสกุล</label>
        <input type="text" name="p_surname" class="form-control" value="<?php echo $row["p_surname"]?>"><br>
        </div>

    <div class = "form-group">
        <label for="p_birthday">วันเดือนปีเกิด</label>
        <input type="date" name="p_birthday" class="form-control" value="<?php echo $row["p_birthday"]?>"><br>
    </div>
        
    <div class = "form-group">
        <label for="p_address">ที่อยู่</label>
        <textarea name="p_address" class="form-control"><?php echo $row["p_address"];?></textarea>
    </div>

    <div class = "form-group">
        <label for="p_skill">ทักษะ</label>
        <textarea name="p_skill" class="form-control"><?php echo $row["p_skill"];?></textarea>
    </div>

    <div class = "form-group">
        <label for="p_tel">เบอร์โทรศัพท์</label>
        <input type="tel" name="p_tel" class="form-control" value="<?php echo $row["p_tel"];?>">
    </div>

    <div class = "form-group">
        <label for="d_id">ตำแหน่งของบุคลากร</label>
        <input type="tel" name="d_id" class="form-control" value="<?php echo $row["d_id"];?>">
    </div>
                            
    <div class="my-3">
        <input type="submit" value="แก้ไขข้อมูล" class="btnbtn-success">
        <input type="reset" value="ล้างข้อมูล" class="btnbtn-danger">
        <a href="index.php" class="btn btn-primary">HomePage </a>
    </div>
    </div>
</div>


</form>

</body>

</html>