<?php
// เริ่มใช้ session_start
session_start();
require("conn.php");
if($_SESSION["p_level"] !="u"){ // ใส่ข้อมูลเข้ามา ไม่เท่ากับ !="u" ไม่ใช่ user ให้แสดงข้อความ echo <สำหรับผู้ใช้งานระบบ> / ในหน้า check.php 

    echo"<center>สำหรับผู้ใช้งานระบบ <a href=login.php>กรุณาเข้าสู่ระบบ</center>";
    exit();
}
if(!$_SESSION["p_id"]){ // เครื่องหมาย ! เป็นเงื่อนไข ถ้าไม่ได้ใส่ข้อมูล login จะถูก ส่งกลับไป login.php
    header("location:login.php");
    
}else{   // ถ้าเข้ามาถูกต้องได้ จะทำการแสดงข้อมูล html ทั้งหมด
                                        // ดึงข้อมูลใน ฟิลล์ และ $_SESSION ของ check.php มาใช้
    $sqllogin="SELECT * FROM person WHERE p_id='".$_SESSION["p_id"]."'";
    $result = mysqli_query($con,$sqllogin);
    $row=mysqli_fetch_assoc($result); // ดึงข้อมูล $result
?>


<!doctype html>
<html lang="en">
  <head>
    <!-- Required meta tags -->
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <!-- Bootstrap CSS -->
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.1.3/dist/css/bootstrap.min.css" 
    rel="stylesheet" integrity="sha384-1BmE4kWBq78iYhFldvKuhfTAU6auU8tT94WrHftjDbrCEXSU1oBoqyl2QvZ6jIW3" crossorigin="anonymous">
    <link href='https://unpkg.com/boxicons@2.1.4/css/boxicons.min.css' rel='stylesheet'>
    <link rel="stylesheet" type="text/css" href="stylesBG.css">
    <title>MEMBER!</title>
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
<h2>ยินดีต้อนรับสมาชิก</h2>                                          
<p><i class='bx bx-user'style='color:#620dd2'></i> สวัสดีคุณ <?php echo $row["p_prefix"];
    echo $row["p_name"]; 
    echo "&nbsp";
    echo $row["p_surname"]; ?> <a href="logout.php" class ="btn byn danger btn-sm"> <!-- ทำการลิ้งค์ logout.php เพื่อ ล็อคเอาท์ออก -->
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
        </tr>
    </thed>
    <tbody>
    <tr>
            <td><?php echo $row["p_prefix"];?></td>
            <td><?php echo $row["p_name"];?></td>
            <td><?php echo $row["p_surname"];?></td>
            <td><?php echo $row["p_birthday"];?></td>
            <td><?php echo $row["p_address"];?></td>
            <td><?php echo $row["p_skill"];?></td>
            <td><?php echo $row["p_tel"];?></td>
            <td><a href="editform.php?p_id=<?php echo $row["p_id"] ?>" class="btn btn-light">แก้ไข</a></td>
    </tobdy>
    </table>
    
                                                        

    </div>
    

    <!-- Optional JavaScript; choose one of the two! -->

    <!-- Option 1: Bootstrap Bundle with Popper -->
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.1.3/dist/js/bootstrap.bundle.min.js" integrity="sha384-ka7Sk0Gln4gmtz2MlQnikT1wXgYsOg+OMhuP+IlRH9sENBO0LRn5q+8nbTov4+1p" crossorigin="anonymous"></script>

    <!-- Option 2: Separate Popper and Bootstrap JS -->
    <!--
    <script src="https://cdn.jsdelivr.net/npm/@popperjs/core@2.10.2/dist/umd/popper.min.js" integrity="sha384-7+zCNj/IqJ95wo16oMtfsKbZ9ccEh31eOz1HGyDuCQ6wgnyJNSYdrPa03rtR1zdB" crossorigin="anonymous"></script>
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.1.3/dist/js/bootstrap.min.js" integrity="sha384-QJHtvGhmr9XOIpI6YVutG+2QOK9T+ZnN4kzFN1RtK3zEFEIsxhlmWl5/YESvpZ13" crossorigin="anonymous"></script>
    -->
  </body>
  <?php } ?> 
</html>