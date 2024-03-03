<?php
require ("conn.php");
//กำหนดตัวแปร p_data

$p_data=$_POST["p_data"];       //  LIKE = เปรียบเทียบข้อมูล นำ LIKE %p_data% หมายความว่า คนหาข้อมูลที่มีของ '%$p_data% ซึ่ง เรากำหนดตัวแปรไว้แล้ว
                                // https://saixiii.com/database-sql-like-clause/
$sql="SELECT * FROM person WHERE p_name LIKE '%$p_data%' OR p_surname LIKE '%$p_data%' ORDER BY p_name ASC";
$result=mysqli_query($con,$sql);
$count=mysqli_num_rows($result);
$order=1; // นับแถวจากเลข 1

?>


<!doctype html>
<html lang="en">
  <head>
    <!-- Required meta tags -->
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <!-- Bootstrap CSS -->
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.1.3/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-1BmE4kWBq78iYhFldvKuhfTAU6auU8tT94WrHftjDbrCEXSU1oBoqyl2QvZ6jIW3" crossorigin="anonymous">
    <link rel="stylesheet" type="text/css" href="stylesBG.css">
    <title>บุคลากร !!</title>
  </head>
  <body>
  <div>
<?php
    require ("navbar.php");
?>
    </div>

<div class="header">
<div class="container">

    <h1 class="text-center mt-3">รายชื่อบุคลากรทั้งหมด</h1>
    <!-- Required meta tags - <form action="search.php" class="form-gruop my- 3" method="POST">
        <div class="row">
            <div class="col-6">
                <input type="text" placeholder="ค้นหาชื่อหรือนามสกุล" class="form-control"name="p_data" Required>
             </div>
                <div class="col-6">
                    <input type="submit" value="ค้นหาข้อรายชื่อของบุคลากร" class="btn btn-info">
        </div>
    </form>
    -->
    </div>
    </form>
    <?php if ($count >0) {?>
        <table class="table">
  <thead class="table-dark">
        <tr>
        <th>ID</th>
            <th>คำนำหน้า</th>
            <th>ชื่อ</th>
            <th>นามสกุล</th>
            <th>วันเกิด</th>
            <th>ที่อยู่ปัจจุบัน</th>
            <th>ทักษะ</th>
            <th>เบอร์โทรศัพท์</th>
        </tr>
    </thed>
    <tbody>
        <?php while($row=mysqli_fetch_assoc($result)){
        // นำข้อมูล จากตัวแปร result ด้านบน มาเก็บใน $r=mysqli_fetch_assoc ($result) และ ในตัวแปร $r จะทำการใช้ while วนลูบ
        ?>
    <tr>
                        
            <td><?php echo $order++;?></td>
            <td><?php echo $row["p_prefix"];?></td>
            <td><?php echo $row["p_name"];?></td>
            <td><?php echo $row["p_surname"];?></td>
            <td><?php echo $row["p_birthday"];?></td>
            <td><?php echo $row["p_address"];?></td>
            <td><?php echo $row["p_skill"];?></td>
            <td><?php echo $row["p_tel"];?></td>
                </tr>
            <?php } ?>
         </tobdy>
    </table>
<?php }else{?>
    <div class="alert alert-danger">
        <b>ไม่พบข้อมูลบุคลากร</b>
    </div>"
    <?php } ?>

    <a href="index.php" class="btn btn-primary">Homepage </a>

</div>
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
</html>


