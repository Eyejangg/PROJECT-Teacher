<?php
require ("conn.php");
//    เลือก  * ทุกอย่างของ person
//ประกาศตัวแปร ดึง string / $con,sql ที่ทำชื่อไว้ในส่วนต่างๆและประกาศตัวแปร
$sql = "SELECT rank.d_name,person.p_prefix,person.p_name,person.p_surname,person.p_id, person.p_tel 
FROM rank INNER JOIN person ON rank.d_id = person.d_id";
$result=mysqli_query($con,$sql);
//นับแถวจาก result และ ทำการ ประมวลผลใน query sql 
//$count num_rows ทำการนับแถว มีกี่แถวและ ทำการเก็บไว้ใน ตัวแปร result ของ $count num_rows
$count=mysqli_num_rows($result);
$order=1; // นับแถวจากเลข 1

?>

<!doctype html>
<html lang="en">
  <head>
    <!-- Required meta tags -->
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <link rel="stylesheet" type="text/css" href="stylesBG.css">
    <!-- Bootstrap CSS -->
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.1.3/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-1BmE4kWBq78iYhFldvKuhfTAU6auU8tT94WrHftjDbrCEXSU1oBoqyl2QvZ6jIW3" crossorigin="anonymous">

    <title>บุคลากร !!</title>
  </head>
  <body>
  <div>
    <?php
    require ("navbar.php");
    ?>
    </div>

  <div class="header">
  <h1 class="text-center mt-0">รายชื่อบุคคลากรทั้งหมด</h1>
<div class="container">
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
    <div class="container">
    <table class="table">
  <thead class="table-dark">
        <tr>
            <th width="1%">ID</th>
            <th width="6%">คำนำหน้า</th>
            <th width="10%">ชื่อ</th>
            <th width="7%">นามสกุล</th>
            <th width="10%">เบอร์โทรศัพท์</th>
            <th width="15%">ตำแหน่งของบุคลากร</th>
        </tr>
    </thed>
    <tbody>
    </div>
        <?php while($row=mysqli_fetch_assoc($result)){
        // นำข้อมูล จากตัวแปร result ด้านบน มาเก็บใน $r=mysqli_fetch_assoc ($result) และ ในตัวแปร $r จะทำการใช้ while วนลูบ
        ?>
    <tr>
                        
            <td><?php echo $order++;?></td>
            <td><?php echo $row["p_prefix"];?></td>
            <td><?php echo $row["p_name"];?></td>
            <td><?php echo $row["p_surname"];?></td>
            <td><?php echo $row["p_tel"];?></td>
            <td><?php echo $row["d_name"];?></td>
    </tr>
            <?php } ?>

    </tobdy>
    </table>


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


