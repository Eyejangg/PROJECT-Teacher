<?php 

require ("conn.php");

// เก็บข้อมูล เงื่อนไขการลบ จะลบ ภายใน p_id นั้นๆ อย่างเช่น  /deleteform.php?p_id=1 , id=2 , id=3
$p_id=$_GET["p_id"];
// สร้างตัวแปรและเก็บข้อมูลตัวแปร / เรียกใช้ตัวแปร p_id=$p_id;
$sql = "DELETE FROM person WHERE p_id = $p_id";
$result=mysqli_query($con,$sql);
echo '
    <script src="https://code.jquery.com/jquery-2.1.3.min.js"></script>
    <script src="https://cdnjs.cloudflare.com/ajax/libs/sweetalert/1.1.3/sweetalert-dev.js"></script>
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/sweetalert/1.1.3/sweetalert.css">';
    
if($result) {
    echo '
    <script type="text/javascript">        
    $(document).ready(function(){
   
        swal({
            title: "Success!",
            text: "Successfuly delete customer information",
            type: "success",
            timer: 2500,
            showConfirmButton: false
          }, function(){
                window.location.href = "index.php";
          });
    });
    </script>
    ';
} else {
    echo '
    <script type="text/javascript">        
    $(document).ready(function(){
   
        swal({
            title: "Error!",
            text: "Unable to delete customer information",
            type: "error",
            timer: 2500,
            showConfirmButton: false
          }, function(){
                window.location.href = "index.php";
          });
    });
    </script>
    ';
}
?>