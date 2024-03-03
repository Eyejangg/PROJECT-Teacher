<?php
// เริ่มใช้ session_start
session_start();
require("conn.php");

// ตรวจสอบสิทธิ์การเข้าใช้งาน
if($_SESSION["p_level"] != "a") {
    echo "<center>ผู้ดูแลระบบ <a href='login.php'>กรุณาเข้าสู่ระบบ</a></center>";
    exit();
}

// ตรวจสอบว่ามีการล็อกอินเข้าสู่ระบบหรือไม่
if(!$_SESSION["p_id"]) {
    header("location:login.php");
    exit();
}

// ดึงข้อมูลจากฐานข้อมูล
$sql = "SELECT * FROM person";
$result = mysqli_query($con, $sql);

?>

<!doctype html>
<html lang="en">
<head>
    <!-- Required meta tags -->
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <!-- Bootstrap CSS -->
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.1.3/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-1BmE4kWBq78iYhFldvKuhfTAU6auU8tT94WrHftjDbrCEXSU1oBoqyl2QvZ6jIW3" crossorigin="anonymous">
    <link href='https://unpkg.com/boxicons@2.1.4/css/boxicons.min.css' rel='stylesheet'>
    <link rel="stylesheet" type="text/css" href="stylesBG.css">
    <title>ADMIN PAGE!</title>
</head>
<body>
<div>
    <?php
    require ("navbar.php");
    ?>
    </div>
<div class="header">
<div class="container">
<div class="container">
    <h2><center>ADMIN จะสามารถแก้ไขและลบข้อมูลได้</h2>
    <a href="logout.php" class ="btn byn danger btn-sm"> <!-- ทำการลิ้งค์ logout.php เพื่อ ล็อคเอาท์ออก -->
        <i class='bx bx-log-out bx-tada' style='color:#620dd2' >ล็อคเอ้าท์ออก</i></a></p>
        <table class="table">
  <thead class="table-dark">
        <tr>
            <th width="10%">คำนำหน้า</th>
            <th>ชื่อ</th>
            <th>นามสกุล</th>
            <th width="10%">วันเกิด</th>
            <th width="10%">ที่อยู่ปัจจุบัน</th>
            <th width="5%">ทักษะ</th>
            <th width="5%">เบอร์โทรศัพท์</th>
            <th width=10%">แก้ไขข้อมูล</th>
            <th width=10%">ลบข้อมูล</th>
        </tr>
        </thead>
        <tbody>
        <?php while($row = mysqli_fetch_assoc($result)) { ?>
            <tr>
                <td><?php echo $row["p_prefix"];?></td>
                <td><?php echo $row["p_name"];?></td>
                <td><?php echo $row["p_surname"];?></td>
                <td><?php echo $row["p_birthday"];?></td>
                <td><?php echo $row["p_address"];?></td>
                <td><?php echo $row["p_skill"];?></td>
                <td><?php echo $row["p_tel"];?></td>
                <td><a href="editform.php?p_id=<?php echo $row["p_id"]; ?>" class="btn btn-light">แก้ไข</a></td>
                <td><a href="deleteform.php?p_id=<?php echo $row["p_id"]; ?>" class="btn btn-dark" onclick="return confirm('ยืนยันการลบข้อมูล')">ลบข้อมูล

  </body>
  <?php } ?> 
</html>