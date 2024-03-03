<?php
// เริ่มใช้ session_start
session_start();
require("conn.php");
    if(isset($_POST['username'])) {
        // รับค่าจาก login.php ส่งมาแบบ $_POST
        // ที่เรากำหนดชื่อไว้ว่า username , password
    $username = $_POST['username'];
    $password =md5($_POST['password']);
                // เลือก ตารางทั้งหมดใน person / where ใน ฟิลล์ p_user,p_passs ตรงกับตัวแปร $username , $password
    $sql_userpass ="SELECT * FROM person where p_user='".$username."' AND p_pass='".$password."'";

    $result = mysqli_query($con, $sql_userpass); // เรียกใช้ตัวแปร $con , $sql_userpass

// ประกาศตัวแปร $_SEESION
    if (mysqli_num_rows($result) == 1) {
        $row = mysqli_fetch_array($result);
        $_SESSION["p_id"] = $row["p_id"]; // key หลักในการดึงข้อมูลของ p_id เข้ามาใช้
        $_SESSION["p_user"] = $row["p_name"] . " " . $row["p_username"];
        $_SESSION["p_level"] = $row["p_level"];
        if ($_SESSION["p_level"] == "a") { // ถ้าค่าที่ส่งจาก p_level ออกมาเป็น a หรือเท่ากับ a จะ = admin และถูกส่งไปยัง admin_page.php
          header("location:admin_page.php");
        }
        if ($_SESSION["p_level"] == "u") { // ถ้าค่าที่ส่งจาก p_level ออกมาเป็น u หรือเท่ากับ u จะ = username และจะถูกส่งไปยัง user_page.php
          header("location:user_page.php");
        }
      } else { // ถ้าไม่ใช่ 2 เงื่อนไขข้างบน จะแสดงผล Username ไม่ถูกต้อง Password ผิด
        echo "<script>";
        echo "alert(\"Username ไม่ถูกต้องหรือ Password ผิด \");";
        echo "window.history.back()";
        echo "</script>";
      }
    } else {
      header("location:login.php");
    }
    